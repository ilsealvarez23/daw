<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::media('bids',function(Blueprint $table){
            $table->increments('id');
            $table->increments('id_nft')
            $table->string('type');
            $table->string('filename') 
            $table->foreign('created_at')->references('created')->on('at');
            $table->foreign('updated_at')->references('updated')->on('at');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
