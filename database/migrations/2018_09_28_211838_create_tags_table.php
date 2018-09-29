<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{

    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->string('uid', 100)->unique();
            $table->string('title', 255);
            $table->enum('status', [
                'tag',
                'category',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
}
