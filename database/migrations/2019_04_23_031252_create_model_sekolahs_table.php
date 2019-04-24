<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('npsn',10)->unique();
            $table->string('nss',100)->nullable();
			$table->string('nama_sekolah');
            $table->string('alamat');
			$table->string('kelurahan');
			$table->string('kecamatan');
			$table->string('kota');
			$table->string('provinsi');
			$table->string('negara')->default('indonesia');;
			$table->string('kodepos');
			$table->string('telp')->nullable();
			$table->string('email')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('sekolahs');
    }
}
