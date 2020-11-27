<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\Session;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'user_id' => 1,
            'entrada' => '10:12:10',
            'saida' => '10:12:10',
        ]);
    }
}
