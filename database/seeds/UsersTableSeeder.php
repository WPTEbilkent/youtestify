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
            'name' => 'Ömer Cem Kaya',
            'email' => 'omercemkaya@gmail.com',
            'password' => bcrypt('59475947'),
        ]);
    }
}
