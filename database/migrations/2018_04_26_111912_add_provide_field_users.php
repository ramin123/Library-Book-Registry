<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvideFieldUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            // add bio,gender,dob,pic,country,state,city,address,postal
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            // delete above columns
            $table->dropColumn(['provider', 'provider_id']);
        });
    }
}
