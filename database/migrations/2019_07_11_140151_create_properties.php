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
           $table->bigIncrements('id');
			
			$table->unsignedBigInteger('user_id');
			 $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			
			
			$table->string('title');
//            $table->string('accomodation_type')->default('Room');
//			$table->smallInteger('number_of_rooms')->default(1);
			$table->Integer('street_no');
			$table->string('street_name');
			$table->string('city');
			$table->string('state');
			$table->string('zip')->nullable();
			$table->string('country');
			$table->Integer('price');
			$table->date('available_from');
			$table->string('email');
			
			$table->string('image_upload');
			$table->longText('description');
			$table->string('terms_conditions')->default('yes');
			$table->timestamp('updated_at')->nullable();
			$table->timestamp('created_at')->nullable();
			
			


			
       
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


