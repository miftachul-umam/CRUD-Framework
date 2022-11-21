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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->char('nim',15)->primary;
            $table->char('nama',150);
            $table->integer('umur');
            $table->char('alamat',255);
            $table->char('kota',100);
            $table->char('kelas',50);
            $table->char('jurusan',50);
            $table->date('create_at');
            $table->date('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
