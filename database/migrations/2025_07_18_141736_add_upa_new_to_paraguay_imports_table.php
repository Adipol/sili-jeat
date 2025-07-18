<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpaNewToParaguayImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paraguay_imports', function (Blueprint $table) {
            $table->integer('upa_new')->nullable()->after('dea_new');
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
            $table->dropColumn('upa_new');
        });
    }
}
