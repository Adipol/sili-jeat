<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCanadiensesNewToGuatemalaImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guatemala_imports', function (Blueprint $table) {
            $table->integer('canadienses_new')->nullable()->after('europol_new');
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
            $table->dropColumn('canadienses_new');
        });
    }
}
