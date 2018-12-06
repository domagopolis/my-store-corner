<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemovePostcodeIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postcodes', function ($table){
            $table->dropForeign(['country_id']);
        });
        
        Schema::table('postcodes', function (Blueprint $table) {
            $table->dropColumn('country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postcodes', function (Blueprint $table) {
            $table->integer('country_id')->unsigned()->after('id');
        });

        Schema::table('postcodes', function ($table){
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }
}
