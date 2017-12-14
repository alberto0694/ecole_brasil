<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aluno Ecole',
            'email' => 'aluno@ecole.com',
            'permission' => 'AD',
            'password' => bcrypt('aluno@ecole.com'),
        ]);
    }
}
