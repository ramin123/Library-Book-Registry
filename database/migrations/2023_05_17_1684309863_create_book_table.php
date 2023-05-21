<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
		    $table->id();
		    $table->string('title');
		    $table->string('publication_year')->nullable()->default('NULL');
            $table->enum('type', ['graphic', 'digital', 'printed'])->default('graphic');
		    $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
		    
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}