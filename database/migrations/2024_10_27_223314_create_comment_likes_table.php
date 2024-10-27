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
        Schema::create('comment_likes', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement();
            $table->integer('comment_id')->unsigned()->nullable();
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));

            // Индекс для поля `comment_id`
            $table->index('comment_id', 'commentLike_comment');

            // Внешний ключ для поля `comment_id`, ссылающийся на `comments.id`
            $table->foreign('comment_id', 'commentLike_comment')
                  ->references('id')
                  ->on('comments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comment_likes', function (Blueprint $table) {
            $table->dropForeign('commentLike_comment');
        });

        Schema::dropIfExists('comment_likes');
    }
};
