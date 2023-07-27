<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEngelUpgradeToSalvadorImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salvador_imports', function (Blueprint $table) {
            $table->integer('engel_upgrade')->nullable()->after('pf_ue_upgrade');
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
            $table->dropColumn('engel_upgrade');
        });
    }
}
