<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loaitin_id');
            $table->foreign('loaitin_id')->references('id')->on('loaitin')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('thu_tu');
            $table->string('tieu_de');
            $table->String('noi_dung');
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
        Schema::dropIfExists('tin');
    }
}
