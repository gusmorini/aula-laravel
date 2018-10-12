<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jaime Filho',
            'email'  =>  'jaime.vendrame@gmail.com',
            'password' => bcrypt('secret'),
            'biography' => 'Usuário Fulano de Tal',
        ]);
    }
}
