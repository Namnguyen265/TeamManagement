<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('department', function (Blueprint $table) {
            //
            $table->dropColumn('id');
            $table->string('department_id', 20)->nullable(false)->primary();
            $table->string('department_name', 50)->nullable();
            $table->string('descriptions', 100)->nullable();
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
        Schema::table('department', function (Blueprint $table) {
            //

            
        });
        // $table->string('UserDomainName');
        Schema::dropIfExists('department');
    }
}
