<?php

use Illuminate\Database\Seeder;

class isidata extends Seeder
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
			'kodepos' => '45284',
			'status' => 'aktif'
        ]
		));
		
		DB::table('usertypes')->insert(array(
		[
        	'id_usertype' => '1',
        	'group_user' => 'Admin'
        ],
		[
        	'id_usertype' => '2',
        	'group_user' => 'Operator'
        ],
		[
        	'id_usertype' => '3',
        	'group_user' => 'Walikelas'
        ],
		[
        	'id_usertype' => '4',
        	'group_user' => 'Guru'
        ],
		[
        	'id_usertype' => '5',
        	'group_user' => 'Siswa'
        ]
		));
		
		DB::table('users')->insert(array(
		[
        	'username' => 'admin',
        	'email' => 'admin@smkn1krangkeng.sch.id',
        	'password' => bcrypt('admin'),
        	'name' => 'Admin',
			'user_type' => '1'
        ],
		[
        	'username' => 'operator',
        	'email' => 'operator@smkn1krangkeng.sch.id',
        	'password' => bcrypt('operator'),
        	'name' => 'Operator',
			'user_type' => '2'
        ],
		[
        	'username' => 'walikelas',
        	'email' => 'walikelas@smkn1krangkeng.sch.id',
        	'password' => bcrypt('walikelas'),
        	'name' => 'Wali Kelas',
			'user_type' => '3'
        ],
		[
        	'username' => 'guru',
        	'email' => 'guru@smkn1krangkeng.sch.id',
        	'password' => bcrypt('guru'),
        	'name' => 'Guru',
			'user_type' => '4'
        ],
		[
        	'username' => 'siswa',
        	'email' => 'siswa@smkn1krangkeng.sch.id',
        	'password' => bcrypt('siswa'),
        	'name' => 'Siswa',
			'user_type' => '5'
        ]
		));
		
    }
}
