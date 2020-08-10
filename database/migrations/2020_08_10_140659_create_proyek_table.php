<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');  
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->foreign('manager_id')->references('manager_karyawan_id')->on('manager');
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->foreign('staff_id')->references('staff_karyawan_id')->on('staff');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
