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
        Schema::create('disease_pestcontrol', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disease_id')->constrained('diseases');
            $table->foreignId('pestcontrol_id')->constrained('pestcontrols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_pestcontrol');
    }
};
