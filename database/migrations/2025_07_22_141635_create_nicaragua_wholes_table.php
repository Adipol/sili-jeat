<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNicaraguaWholesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nicaragua_wholes', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date');
            $table->string('link_xlsx', 100)->nullable();
            $table->string('link_csv', 100)->nullable();

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
        Schema::dropIfExists('nicaragua_wholes');
    }
}
