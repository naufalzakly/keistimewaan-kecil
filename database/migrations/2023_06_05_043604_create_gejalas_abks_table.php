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
        Schema::create('gejalas_abks', function (Blueprint $table) {
           
            $table->unsignedBigInteger('gejala_id');
            $table->unsignedBigInteger('abk_id');
            
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
            $table->foreign('abk_id')->references('id')->on('abks')->onDelete('cascade');
            
            $table->primary(['gejala_id', 'abk_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gejalas_abks');
    }
};
