<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('avatar',200)->change();
            // $table->renameColumn('from', 'to');D
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('avatar',255)->nullable()->change();
            
        });
    }
};
