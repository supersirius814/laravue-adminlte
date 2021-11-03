<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_historys', function (Blueprint $table) {
            $table->bigIncrements('order_historys_id');
            $table->integer('order_type');
            $table->string('order_no');
            $table->integer('update_status');
            $table->string('shop_no');
            $table->text('json_data');
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
        Schema::dropIfExists('order_historys');
    }
}
