<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug');
            $table->string('thumb');
            $table->string('photo');
            $table->string('link');
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
        Schema::dropIfExists('videos');
    }
}
