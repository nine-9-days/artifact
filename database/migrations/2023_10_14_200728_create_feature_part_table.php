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
        Schema::create('feature_part', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->foreignId('part_id')->nullable(true)->constrained('parts');
            $table->foreignId('feature_id')->nullable(true)->constrained('features');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_part');
    }
};
