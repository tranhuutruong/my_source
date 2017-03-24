<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');

            /*info*/
            $table->string('name');
            $table->string('phone');
            $table->string('hotline');
            $table->string('email');
            $table->string('address');
            $table->string('address2');

            /*option web*/
            $table->string('logo');
            $table->string('banner');
            $table->string('footer');
            $table->string('contact');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
