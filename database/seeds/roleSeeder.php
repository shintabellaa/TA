<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'id' => 1,
                'nama_role' => 'Su-Admin'
            ]
        ];

        foreach ($datas as $key => $data) {
            DB::table('roles')->insert($data);
        }
    }
}
