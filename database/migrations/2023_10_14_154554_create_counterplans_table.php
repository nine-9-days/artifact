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
        Schema::create('counterplans', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('feature',50);
            $table->foreignId('pestcontrol_id')->nullable()->constrained('pestcontrols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counterplans');
    }
};
