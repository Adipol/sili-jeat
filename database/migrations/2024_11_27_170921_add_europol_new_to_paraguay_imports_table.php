<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEuropolNewToParaguayImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paraguay_imports', function (Blueprint $table) {
            $table->integer('europol_new')->nullable()->after('uk_new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paraguay_imports', function (Blueprint $table) {
            $table->dropColumn('europol_new');
        });
    }
}
