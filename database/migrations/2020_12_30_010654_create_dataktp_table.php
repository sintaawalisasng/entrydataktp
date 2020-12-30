<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataktpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataktp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_provinsi');
            $table->string('nama_kabkota');
            $table->string('NIK');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('pekerjaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataktp');
    }
}
