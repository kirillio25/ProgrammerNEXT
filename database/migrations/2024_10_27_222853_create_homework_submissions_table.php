<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homework_submissions', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement(); 
            $table->integer('user_id')->unsigned();
            $table->integer('submodule_id')->unsigned();
            $table->integer('status_id')->default(1);
            $table->boolean('deadline')->default(0)->comment('1 - нужно перезагрузить задание');
            $table->text('path_url');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Внешний ключ для поля `status_id`, ссылающийся на `homework_statuses.id`
            $table->foreign('status_id', 'homeworkSubmission_homeworkStatuse')
                  ->references('id')
                  ->on('homework_statuses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        // Триггер, обновляющий поле `deadline` при изменении `status_id` на 3
        DB::unprepared('
            CREATE TRIGGER update_deadline_on_status_change 
            BEFORE UPDATE ON homework_submissions 
            FOR EACH ROW 
            BEGIN
                IF NEW.status_id = 3 THEN
                    SET NEW.deadline = 1;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         // Удаление триггера при откате миграции
         DB::unprepared('DROP TRIGGER IF EXISTS update_deadline_on_status_change');

         Schema::table('homework_submissions', function (Blueprint $table) {
             $table->dropForeign('homeworkSubmission_homeworkStatuse');
         });
 
         Schema::dropIfExists('homework_submissions');
    }
};
