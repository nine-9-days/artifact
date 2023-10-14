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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('feature',50);
        });
        
        Schema::rename('disease_part','feature_part');
        Schema::table('feature_part', function (Blueprint $table) {
            $table->rename('disease_id','feature_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
        Schema::rename('feature_part','disease_part');
        Schema::table('feature_part', function (Blueprint $table) {
            $table->rename('feature_id','disease_id');
        });
    }
};
