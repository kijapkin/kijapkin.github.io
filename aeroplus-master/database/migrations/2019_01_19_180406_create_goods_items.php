<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_category_id', false, true);
            $table->string('title', 255)->nullable();
            $table->float('price', 8, 2);
            $table->float('latest_price', 8, 2);
            $table->timestamps();
            $table->foreign('goods_category_id')->references('id')->on('goods_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_items');
    }
}
