<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_productions', function (Blueprint $table) {
            $table->bigIncrements('take_productions_id');
            $table->dateTime('handover_date', $precision = 0);
            $table->string('shop_no');
            $table->integer('production_time_code');
            $table->string('item_code');
            $table->integer('production_num');
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
        Schema::dropIfExists('take_productions');
    }
}
