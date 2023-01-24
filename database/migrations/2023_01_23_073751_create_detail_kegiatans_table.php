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
        Schema::create('db_detail_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_tanggal')->unsigned();
            $table->time('waktu_kegiatan');
            $table->string('detail_kegiatan');
            $table->timestamps();
        });

        Schema::table('db_detail_kegiatan', function (Blueprint $table) {
            $table->foreign('id_tanggal')->references('id')->on('db_kegiatan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_detail_kegiatan');
    }
};
