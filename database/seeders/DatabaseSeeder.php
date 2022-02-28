<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();

        User::create(['username' => 'mdb123', 'password' => '123456abc', 'is_enabled' => true, 'register_date' => '2022-02-28', 'name' => 'Ana', 'surname' => 'Arckan', 'email' => 'ana@email.com', 'phone' => '99999999999']);
        User::create(['username' => 'jfs15', 'password' => '123456abc', 'is_enabled' => false, 'register_date' => '2022-02-28', 'name' => 'Joaquim', 'surname' => 'Felizaldo', 'email' => 'joaquim@email.com', 'phone' => '99999999999']);
        User::create(['username' => 'jhon_007', 'password' => '123456abc', 'is_enabled' => true, 'register_date' => '2022-02-28', 'name' => 'Jhon', 'surname' => 'Aparecido Lins', 'email' => 'jhon@email.com', 'phone' => '99999999999']);
    }
}
