<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['username' => 'mdb123', 'password' => Hash::make(Env('HASH_SECRET')), 'is_enabled' => true, 'register_date' => '2022-02-28', 'name' => 'Ana', 'surname' => 'Arckan', 'email' => 'ana@email.com', 'phone' => '99999999999']);
        User::create(['username' => 'jfs15', 'password' => Hash::make(Env('HASH_SECRET')), 'is_enabled' => false, 'register_date' => '2022-02-28', 'name' => 'Joaquim', 'surname' => 'Felizaldo', 'email' => 'joaquim@email.com', 'phone' => '99999999999']);
        User::create(['username' => 'jhon_007', 'password' => Hash::make(Env('HASH_SECRET')), 'is_enabled' => true, 'register_date' => '2022-02-28', 'name' => 'Jhon', 'surname' => 'Aparecido Lins', 'email' => 'jhon@email.com', 'phone' => '99999999999']);
    }
}
