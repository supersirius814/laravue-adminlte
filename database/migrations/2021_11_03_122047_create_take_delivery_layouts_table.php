<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeDeliveryLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_delivery_layouts', function (Blueprint $table) {
            $table->bigIncrements('take_delivery_layouts_id');
            $table->dateTime('apply_start_date', $precision = 0);
            $table->dateTime('apply_end_date', $precision = 0);
            $table->string('shop_no');
            $table->string('item_code');
            $table->integer('seq');
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
        Schema::dropIfExists('take_delivery_layouts');
    }
}
