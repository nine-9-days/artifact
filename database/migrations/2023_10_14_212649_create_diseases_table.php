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
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->foreignId('feature_part_id1')->nullable(true)->constrained('feature_part'); 
            $table->foreignId('feature_part_id2')->nullable(true)->constrained('feature_part'); 
            $table->foreignId('feature_part_id3')->nullable(true)->constrained('feature_part'); 
            $table->foreignId('feature_part_id4')->nullable(true)->constrained('feature_part'); 
            $table->foreignId('feature_part_id5')->nullable(true)->constrained('feature_part'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseases');
    }
};
