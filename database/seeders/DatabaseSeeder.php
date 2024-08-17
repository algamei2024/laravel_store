<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Info;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Mohammed',
        //     'email' => 'm.algamei20@gmail.com',
        //     'password' => 'jjjjjjjj',
        // ]);
        Info::factory()->create([
            'name'=>'متجر',
            'description'=>'متجرك',
            'email'=>'collage@gmail.com',
            'phone'=>'+9*********5',
            'color'=>'000000',
            'map'=>'www.google.com'
        ]);
    }
}