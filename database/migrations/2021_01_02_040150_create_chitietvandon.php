<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietvandon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietvandon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_vandon');
            $table->foreignId('hanghoa_id');
            $table->integer('solong');
            $table->foreign('id_vandon')->references('id')->on('vandon');
            $table->foreign('hanghoa_id')->references('id')->on('hanghoa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietvandon');
    }
}
