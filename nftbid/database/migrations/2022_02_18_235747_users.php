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
        Schema::create('users',function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->unsigned(); 
            $table->string('email');
            $table->foreign('email_verifed_at')->references('verified')->on('at');;
            $table->string('img');
            $table->string('password');
            $table->integer('phone');
            $table->string('alias')
            $table->string('image')
            $table->string('remember_token')
            $table->increments(id_category);->unsigned;  
            $table->increments(id_user);->unsigned; 
            $table->foreign('created_at')->references('created')->on('at');
            $table->foreign('updated_at')->references('updated')->on('at');
    }

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
