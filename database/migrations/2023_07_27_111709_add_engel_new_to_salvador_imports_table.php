<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEngelNewToSalvadorImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salvador_imports', function (Blueprint $table) {
            $table->integer('engel_new')->nullable()->after('pf_ue_new');
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
            $table->dropColumn('engel_new');
        });
    }
}
