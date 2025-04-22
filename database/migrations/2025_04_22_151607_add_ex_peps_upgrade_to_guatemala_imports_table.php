<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExPepsUpgradeToGuatemalaImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guatemala_imports', function (Blueprint $table) {
            $table->integer('ex_peps_upgrade')->nullable()->after('canadienses_upgrade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guatemala_imports', function (Blueprint $table) {
            $table->dropColumn('ex_peps_upgrade');
        });
    }
}
