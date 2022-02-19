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
        Schema::create('priceHistory',function(Blueprint $table){
            $table->increments('id');
            $table->string('tokenable_type')
            $table->increments('tokenable_id');
            $table->string('name')
            $table->string('token')
            $table->string('abilities')
            $table->string('price');
            $table->foreign('created_at')->references('used')->on('at');
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
