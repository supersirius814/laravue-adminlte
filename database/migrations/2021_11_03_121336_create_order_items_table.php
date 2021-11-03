<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('order_items_id');
            $table->integer('order_type');
            $table->string('shop_no');
            $table->string('order_no');
            $table->integer('seq');
            $table->string('item_id');
            $table->string('item_code');
            $table->string('item_pos_code');
            $table->string('item_division');
            $table->integer('item_type');
            $table->string('item_division_name');
            $table->string('item_name_employee');
            $table->integer('item_num');
            $table->integer('item_price');
            $table->integer('item_kan');
            $table->softDeletes();
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
        Schema::dropIfExists('order_items');
    }
}
