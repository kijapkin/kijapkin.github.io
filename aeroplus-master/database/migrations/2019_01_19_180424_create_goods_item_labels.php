<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsItemLabels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_item_labels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_labels_id', false, true);
            $table->integer('goods_items_id', false, true);
            $table->mediumText('content');  
            $table->timestamps();
            $table->foreign('goods_labels_id')->references('id')->on('goods_labels');
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
        Schema::dropIfExists('goods_item_labels');
    }
}
