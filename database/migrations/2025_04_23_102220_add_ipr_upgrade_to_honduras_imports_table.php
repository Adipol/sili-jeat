<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIprUpgradeToHondurasImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('honduras_imports', function (Blueprint $table) {
            $table->integer('ipr_upgrade')->nullable()->after('ex_peps_upgrade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('honduras_imports', function (Blueprint $table) {
            $table->dropColumn('ipr_upgrade');
        });
    }
}
