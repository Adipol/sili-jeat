<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseNicaraguaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_nicaragua', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date');
            $table->unsignedBigInteger('detail_id');
            $table->foreign('detail_id')->references('id')->on('details');

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
        Schema::dropIfExists('expense_nicaragua');
    }
}
