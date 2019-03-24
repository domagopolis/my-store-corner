<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveStoreIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function ($table){
            $table->dropForeign(['country_id']);
        });

        Schema::table('stores', function ($table){
            $table->dropForeign(['state_id']);
        });

        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn('country_id');
            $table->dropColumn('state_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->integer('country_id')->nullable()->unsigned()->after('id');
            $table->integer('state_id')->nullable()->unsigned()->after('country_id');
        });

        Schema::table('stores', function ($table){
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

        Schema::table('stores', function ($table){
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });
    }
}
