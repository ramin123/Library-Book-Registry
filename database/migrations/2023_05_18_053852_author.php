<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorrrTable extends Migration
{
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {

		$table->increments('author_id',11);
		$table->string('first_name');
		$table->string('last_name');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('author');
    }
}