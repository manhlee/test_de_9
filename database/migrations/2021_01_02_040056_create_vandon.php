<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVandon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vandon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhanvien_id');
            $table->integer('trangthai');
            $table->string('nguonhan',255);
            $table->string('dienthoai',10);
            $table->text('diachi');
            $table->dateTime('ngaygiaohang', 0);
            $table->text('ghichu');
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien');
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
        Schema::dropIfExists('vandon');
    }
}
