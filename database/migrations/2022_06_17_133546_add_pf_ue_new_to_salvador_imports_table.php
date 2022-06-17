<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPfUeNewToSalvadorImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salvador_imports', function (Blueprint $table) {
            $table->integer('pf_ue_new')->nullable()->after('ue_new');
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
            $table->dropColumn('pf_ue_new');
        });
    }
}
