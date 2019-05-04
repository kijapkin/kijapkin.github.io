<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsItemDescriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_item_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_descriptions_id', false, true);
            $table->integer('goods_items_id', false, true);
            $table->mediumText('content');  
            $table->timestamps();
            $table->foreign('goods_descriptions_id')->references('id')->on('goods_descriptions');
            $table->foreign('goods_items_id')->references('id')->on('goods_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_item_descriptions');
    }
}
