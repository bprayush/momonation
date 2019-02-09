<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMomosToAppreciationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appreciations', function (Blueprint $table) {
            $table->bigInteger('momos');
            $table->string('plates')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appreciations', function (Blueprint $table) {
            $table->dropColumn('momos');
            $table->string('plates')->change();
        });
    }
}
