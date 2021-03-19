<?php

use Illuminate\Database\Seeder;
use App\{Regency,District};

class regencySeeder extends Seeder
{



    public function run()
    {
        $regency = regency::create([
             'regency_id'=>1,
             'regency_name'=>'Kota Padang',
        ]);

        $regency = regency::create([
            'regency_id'=>2,
            'regency_name'=>'Kabupaten Agam',
       ]);

       $regency = regency::create([
             'regency_id'=>3,
             'regency_name'=>'Kota Solok',
       ]);

       $regency = regency::create([
           'regency_id'=>4,
            'regency_name'=>'Kabupaten Lima Puluh Kota',
        ]);

        $regency = regency::create([
             'regency_id'=>5,
             'regency_name'=>'Kabupaten Padang Pariaman',
       ]);



       $district = district::create([
            'district_id'=>1,
            'regency_id'=>1,
            'district_name'=>'Bungus Teluk Kabung',
       ]);

       $district = district::create([
             'district_id'=>2,
             'regency_id'=>1,
             'district_name'=>'Koto Tangah',
         ]);

         $district = district::create([
            'district_id'=>3,
             'regency_id'=>1,
             'district_name'=>'Kuranji',
          ]);

          $district = district::create([
          'district_id'=>4,
             'regency_id'=>1,
             'district_name'=>'Lubuk Begalung',
         ]);

         $district = district::create([
             'district_id'=>5,
               'regency_id'=>1,
               'district_name'=>'Lubuk Kilangan',
        ]);

        $district = district::create([
             'district_id'=>6,
              'regency_id'=>2,
              'district_name'=>'Ampek Angkek',
       ]);

       $district = district::create([
             'district_id'=>7,
              'regency_id'=>2,
           'district_name'=>'Baso',
         ]);


    }


}
