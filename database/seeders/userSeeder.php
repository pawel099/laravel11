<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create ([
            
         'name'=>'admin123',
         'email'=>'admin@example.com',
         'password' => Hash::make('admin1'),
         'is_admin' =>true,

         ]


        ) ;
    }
}
