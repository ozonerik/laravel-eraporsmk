<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
		)
		);
    }
}
