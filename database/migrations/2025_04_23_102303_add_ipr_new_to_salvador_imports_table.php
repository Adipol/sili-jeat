<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIprNewToSalvadorImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salvador_imports', function (Blueprint $table) {
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
        Schema::table('salvador_imports', function (Blueprint $table) {
            $table->dropColumn('ipr_new');
        });
    }
}
