<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
           $table->bigIncrements('property_id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('accomodation_type');
			$table->smallInteger('number_of_rooms');
			$table->Integer('street_no');
			$table->string('street_name');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('country');
			$table->Integer('price');
			$table->date('available_from');
			$table->bigInteger('phone');
			$table->longText('about_accomodation');
			$table->string('image_upload');
			$table->longText('description');
			$table->string('terms_conditions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
