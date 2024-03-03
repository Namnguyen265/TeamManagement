<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsToTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team', function (Blueprint $table) {
            //

            $table->dropColumn('id');
            $table->string('team_id', 20)->nullable(false)->primary();
            $table->string('team_name', 50)->nullable();
            $table->string('department_id', 20)->nullable(false);
            $table->foreign('department_id')->references('department_id')->on('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team', function (Blueprint $table) {
            //
        });
        Schema::dropIfExists('team');
    }
}
