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
        Schema::create('comments', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement(); 
            $table->integer('course_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable()->comment('ID родительского комментария (NULL, если корневой)');
            $table->text('content');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Индексы для связи
            $table->index('course_id', 'comment_courses');
            $table->index('user_id', 'comment_user');
            $table->index('parent_id', 'commentParent_commentId');

            // Внешние ключи
            $table->foreign('parent_id', 'commentParent_commentId')
                  ->references('id')
                  ->on('comments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('course_id', 'comment_courses')
                  ->references('id')
                  ->on('courses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('user_id', 'comment_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('commentParent_commentId');
            $table->dropForeign('comment_courses');
            $table->dropForeign('comment_user');
        });

        Schema::dropIfExists('comments');
    }
};
