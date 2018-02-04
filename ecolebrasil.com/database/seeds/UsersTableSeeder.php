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
            'name' => 'Alsssuno Ecole',
            'email' => 'administrador@ecole.com',
            'permission' => 'AD',
            'password' => bcrypt('administrador@ecole.com'),
        ]);

        User::create([
            'name' => 'Professor Ecole',
            'email' => 'professor@ecole.com',
            'permission' => 'PF',
            'password' => bcrypt('professor@ecole.com'),
        ]);

        User::create([
            'name' => 'Aluno Ecole',
            'email' => 'aluno@ecole.com',
            'permission' => 'AL',
            'password' => bcrypt('aluno@ecole.com'),
        ]);

        User::create([
            'name' => 'Aluno Restrito Ecole',
            'email' => 'aluno_restrito@ecole.com',
            'permission' => 'AR',
            'password' => bcrypt('aluno_restrito@ecole.com'),
        ]);
    }
}
