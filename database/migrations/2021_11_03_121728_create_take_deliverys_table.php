<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeDeliverysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_deliverys', function (Blueprint $table) {
            $table->bigIncrements('take_deliverys_id');
            $table->integer('order_type');
            $table->string('shop_no');
            $table->string('order_no');
            $table->integer('delivery_check');
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
        Schema::dropIfExists('take_deliverys');
    }
}
