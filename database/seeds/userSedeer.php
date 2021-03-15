<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nip/nik' => '12345678',
                'role_id' => 1,
                'nidn' => '',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'title_ahead' => 'Dr',
                'real_name' => 'Admin',
                'back_title' => 'MSG',
                'birth_place' => '',
                'birth_date' => now(),
                'photo' => '',
                'blood_group' => 'A-',
                'height' => '178',
                'weight' => '40',
                'handicap' => '100',
                'email' => 'shinta@gmail.com',
                'id_card_number' => 'xxxx-xxxx-xxx',
                'npwp' => 'aaa',
                'bpjs' => 'aa',
                'gender' => 'perempuan',
                'religion' => 'Indonesia',
                'marital_status' => 'Kawin',
                'citizen_status' => 'Indonesia',
                'retirement_age_limit' => '60',
                'employee_status' => 'Magang',
            ]
        ];

        foreach ($users as $key => $user) {
            DB::table('users')->insert($user);
        }
    }
}
