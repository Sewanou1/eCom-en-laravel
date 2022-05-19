<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG Mobile',
                'price'=>' 200',
                'description'=>'A smartphone with 4gb ram and more in future',
                'categorie'=>'mobile',
                "gallery"=>"C:\Users\HP\Desktop\Mes dossiers\portable\images\22962292738_status_76a7f48b168247ef95e542cd17c9c712.JPG"
            ],
            [
                'name'=>'LG Mobile',
                'price'=>' 200',
                'description'=>'A smartphone with 4gb ram and more in future',
                'categorie'=>'mobile',
                "gallery"=>"C:\Users\HP\Desktop\Mes dossiers\portable\images\22962292738_status_0692d7a7f3c6441a904b251ee5b7dd0f.JPG"
            ],
            [
                'name'=>'LG Mobile',
                'price'=>' 200',
                'description'=>'A smartphone with 4gb ram and more in future',
                'categorie'=>'mobile',
                "gallery"=>"C:\Users\HP\Desktop\Mes dossiers\portable\images\22962292738_status_f1b3db7fed7b4565a83b68093b2bd593.JPG"
            ]
        ]);

    }
}
