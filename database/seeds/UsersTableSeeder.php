<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Rafael Lucas',
            'email'     => 'rafael@teste.com',
            'password'  => bcrypt('102030'),
        ]);

        User::create([
            'name'      => 'Usuario Teste',
            'email'     => 'usuario01@teste.com',
            'password'  => bcrypt('102030'),
        ]);

        User::create([
            'name'      => 'Admin Teste',
            'email'     => 'admin@teste.com',
            'password'  => bcrypt('102030'),
        ]);
    }
}
