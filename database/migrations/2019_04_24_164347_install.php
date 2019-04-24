<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Install extends Migration
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
			$table->string('negara')->default('indonesia');
			$table->string('kodepos');
			$table->string('telp')->nullable();
			$table->string('email')->nullable();
            $table->string('website')->nullable();
			$table->string('status')->nullable();
            $table->timestamps();
        });
		Schema::create('usertypes', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('id_usertype',10)->unique()->index();
			$table->string('group_user');
            $table->timestamps();
        });
		Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('username',100)->unique()->index();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('name');
			$table->string('user_type',10)->nullable()->index();
            $table->rememberToken();
            $table->timestamps();
        });
		Schema::table('users', function (Blueprint $table) {
		$table->foreign('user_type')
		  ->references('id_usertype')->on('usertypes')
		  ->onUpdate('cascade')
		  ->onDelete('cascade');
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
		Schema::dropIfExists('usertypes');
		Schema::dropIfExists('users');
    }
}
