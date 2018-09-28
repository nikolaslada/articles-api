<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
              $table->increments('id');
              $table->unsignedInteger('author_id');
              $table->string('uid', 100)->unique();
              $table->string('title', 255);
              $table->enum('status', [
                  'hidden',
                  'public',
              ]);
              $table->text('content');
              $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
