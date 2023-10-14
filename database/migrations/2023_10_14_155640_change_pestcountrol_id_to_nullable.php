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
        
        Schema::disableForeignKeyConstraints();
        Schema::table('counterplans', function (Blueprint $table) {
            $table->string('pestcontrol_id')->nullable(true)->change();
        });
        
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('counterplans', function (Blueprint $table) {
            $table->string('pestcontrol_id')->nullable(false)->change();
        });
    }
};
