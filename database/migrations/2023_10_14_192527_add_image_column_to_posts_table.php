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
        Schema::table('diseases', function (Blueprint $table) {
            $table->foreignId('feature_part_id1')->nullable(true)->change(); 
            $table->foreignId('feature_part_id2')->nullable(true)->change(); 
            $table->foreignId('feature_part_id3')->nullable(true)->change(); 
            $table->foreignId('feature_part_id4')->nullable(true)->change(); 
            $table->foreignId('feature_part_id5')->nullable(true)->change(); 
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
        Schema::table('diseases', function (Blueprint $table) {
            $table->string('feature1',50)->change(); 
            $table->string('feature2',50)->change(); 
            $table->string('feature3',50)->change(); 
            $table->string('feature4',50)->change(); 
            $table->string('feature5',50)->change(); 
        });
    }
};
