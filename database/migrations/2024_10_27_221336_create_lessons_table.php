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
        Schema::create('lessons', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement(); 
            $table->string('title', 255);
            $table->integer('submodule_id')->unsigned();
            $table->integer('module_id')->unsigned()->nullable();
            $table->text('lesson_url');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Индексы
            $table->index('module_id', 'lesson_module');
            $table->index('submodule_id', 'lesson_submodule');

            // Внешние ключи
            $table->foreign('module_id', 'lesson_module')
                  ->references('id')
                  ->on('modules')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('submodule_id', 'lesson_submodule')
                  ->references('id')
                  ->on('submodules')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lesson_module');
            $table->dropForeign('lesson_submodule');
        });

        Schema::dropIfExists('lessons');
    }
};
