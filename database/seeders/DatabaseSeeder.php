<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        $userData =[
            [
                'name'=>'Septian Pahmi',
                'email'=>'admin@gmail.com',
                'level'=>'admin',
                'password'=>bcrypt('12345678'),
            ],
            [
                'name'=>'Septian',
                'email'=>'user@gmail.com',
                'level'=>'user',
                'password'=>bcrypt('12345678'),
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
