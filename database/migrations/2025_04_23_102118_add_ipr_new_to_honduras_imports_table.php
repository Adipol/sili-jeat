<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIprNewToHondurasImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('honduras_imports', function (Blueprint $table) {
            $table->integer('ipr_new')->nullable()->after('ex_peps_new');
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
            $table->dropColumn('ipr_new');
        });
    }
}
