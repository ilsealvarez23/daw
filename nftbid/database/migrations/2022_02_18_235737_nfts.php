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
        Schema::create('nfts',function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->unsigned(); 
            $table->string('description');
            $table->integer('base_price');
            $table->string('img');
            $table->integer('token_standar');
            $table->string('metadata');
            $table->integer('likes')
            $table->increments(id_category);->unsigned;  
            $table->increments(id_user);->unsigned; 
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
