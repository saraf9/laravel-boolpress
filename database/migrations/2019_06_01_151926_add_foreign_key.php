<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function(Blueprint $table){

      $table->foreign('author_id', 'author')
            ->references('id')
            ->on('authors')
            ->onDelete('cascade');
      });


      Schema::table('category_post', function(Blueprint $table){

        $table->foreign('category_id', 'category')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');
        $table->foreign('post_id', 'post')
              ->references('id')
              ->on('posts')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function(Blueprint $table){

       $table->dropForeign('author');
     });

     Schema::table('category_post', function(Blueprint $table){
       
       $table->dropForeign('category');
       $table->dropForeign('post');
     });
    }
}
