<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('orders_id');
            $table->integer('order_type');
            $table->string('shop_no');
            $table->string('order_no');
            $table->integer('reserve_status');
            $table->integer('reservation_means');
            $table->string('tablet_id');
            $table->integer('print_num');
            $table->dateTime('receive_datetime', $precision = 0);
            $table->dateTime('handover_datetime', $precision = 0);
            $table->string('cust_id');
            $table->string('cust_name');
            $table->string('cust_tel');
            $table->string('employee_name');
            $table->integer('handover_means');
            $table->integer('accounting');
            $table->integer('to_set_num');
            $table->text('remarks');
            $table->integer('limited_takeout');
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
        Schema::dropIfExists('orders');
    }
}
