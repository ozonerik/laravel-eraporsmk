<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('sekolahs')->insert(array(
		[
        	'npsn' => '20241355',
        	'nama_sekolah' => 'SMKN 1 Krangkeng',
			'alamat' => 'Jl. Raya Singakerta Km. 33',
			'kelurahan' => 'Singakerta',
			'kecamatan' => 'Krangkeng',
			'kota' => 'Indramayu',
			'provinsi' => 'Jawa Barat',
			'kodepos' => '45284'
        ]
		)
		);
    }
}
