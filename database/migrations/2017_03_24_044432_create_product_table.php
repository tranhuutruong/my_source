<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug');
            $table->decimal('price');
            $table->decimal('sale_price');
            $table->string('color');
            $table->string('size');
            $table->string('thumb');
            $table->string('photo');
            $table->integer('cat_id');
            $table->string('type');

            /*content*/
            /*vi*/
            $table->string('description');
            $table->string('detail');

            /*SEO*/
            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_keyword');

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
        Schema::dropIfExists('products');
    }
}
