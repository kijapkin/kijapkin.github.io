<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsLabels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_labels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_category_id', false, true);
            $table->string('label', 255)->nullable();
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
        Schema::dropIfExists('goods_labels');
    }
}
