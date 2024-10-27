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
        Schema::create('homework_files', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement(); 
            $table->string('title', 255);
            $table->integer('submodule_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->text('path_url');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Индексы
            $table->index('submodule_id', 'homeworkFiles_submodule');
            $table->index('module_id', 'homeworkFiles_module');

            // Внешние ключи
            $table->foreign('submodule_id', 'homeworkFiles_submodule')
                  ->references('id')
                  ->on('submodules')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('module_id', 'homeworkFiles_module')
                  ->references('id')
                  ->on('modules')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homework_files', function (Blueprint $table) {
            $table->dropForeign('homeworkFiles_submodule');
            $table->dropForeign('homeworkFiles_module');
        });

        Schema::dropIfExists('homework_files');
    }
};
