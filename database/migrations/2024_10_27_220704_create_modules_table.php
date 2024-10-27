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
        Schema::create('modules', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement(); 
            $table->string('title', 255);
            $table->text('description');
            $table->integer('course_id')->unsigned();
            $table->boolean('is_active');
            $table->text('path_url');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Индексы
            $table->index('course_id', 'modele_course');
            $table->index('is_active', 'module_status');

            // Внешний ключ
            $table->foreign('course_id', 'modele_course')
                  ->references('id')
                  ->on('courses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->dropForeign('modele_course'); // Удаление внешнего ключа
        });
        
        Schema::dropIfExists('modules');
    }
};
