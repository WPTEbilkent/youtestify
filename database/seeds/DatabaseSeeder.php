<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'name' => 'Ömer Cem Kaya',
            'email' => 'omercemkaya@gmail.com',
            'password' => bcrypt('59475947'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'name' => 'Yaşar Ozan Türkcan',
            'email' => 'ozantrkcn@gmail.com',
            'password' => bcrypt('59475947'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Model::reguard();
    }
}
