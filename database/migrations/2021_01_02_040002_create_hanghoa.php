<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHanghoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanghoa', function (Blueprint $table) {
            $table->id();
            $table->string('ten',255);
            $table->foreignId('hangsx_id');
             $table->foreign('hangsx_id')->references('id')->on('hangsanxuat');
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
        Schema::dropIfExists('hanghoa');
    }
}
