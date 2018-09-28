<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
              $table->mediumIncrements('id')->unsigned();
              $table->string('name');
              $table->timestamps();
              $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
}
