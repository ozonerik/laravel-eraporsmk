<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertypes')->insert(array(
		[
        	'user_type' => '1',
        	'group_user' => 'Admin'
        ],
		[
        	'user_type' => '2',
        	'group_user' => 'Operator'
        ],
		[
        	'user_type' => '3',
        	'group_user' => 'Walikelas'
        ],
		[
        	'user_type' => '4',
        	'group_user' => 'Guru'
        ],
		[
        	'user_type' => '5',
        	'group_user' => 'Siswa'
        ]
		)
		);
    }
}
