<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        DB::table("users")->insert([
            'name' => 'Vitória Nunes',
            'email' => 'vitoria.nunes@codejr.com.br',
            'email_verified_at' => now(),
            'birth_date' => '2002/07/19',
            'work_time' => 'integral',
            'address' => 'Rua Alberto Pinto',
            'phone' => '(24) 9 8848-7765',
            'office' => 'admin',
            'password' => Hash::make('123456') // password
     ]);
    }
}
