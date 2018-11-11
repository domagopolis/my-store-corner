<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('postcode_id')->unsigned();
            $table->string('username', 100);
            $table->string('password', 60);
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->string('email', 100);
            $table->string('phone', 100)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('business_registration_number', 100);
            $table->string('website', 100)->nullable();
            $table->string('facebook_page_url', 100)->nullable();
            $table->string('twitter_username', 100)->nullable();
            $table->string('linkedin_page_url', 100)->nullable();
            $table->decimal('latitude', 9, 6)->default(0);
            $table->decimal('longitude', 9, 6)->default(0);
            $table->boolean('payed_member')->default(false);
            $table->timestamps();
        });

        Schema::table('stores', function ($table){
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

        Schema::table('stores', function ($table){
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });

        Schema::table('stores', function ($table){
            $table->foreign('postcode_id')->references('id')->on('postcodes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
