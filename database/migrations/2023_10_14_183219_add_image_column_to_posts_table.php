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
        Schema::table('diseases', function (Blueprint $table) {
            $table->renameColumn('feature', 'feature1');
            $table->string('feature1',50)->nullable(); 
            $table->string('feature2',50)->nullable(); 
            $table->string('feature3',50)->nullable(); 
            $table->string('feature4',50)->nullable(); 
            $table->string('feature5',50)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diseases', function (Blueprint $table) {
            $table->renameColumn('feature1', 'feature');
            $table->string('feature1',50)->nullable(false); 
            $table->dropColumn('feature2');
            $table->dropColumn('feature3');
            $table->dropColumn('feature4');
            $table->dropColumn('feature5');
        });
    }
};
