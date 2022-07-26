<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\Author::create([
             'name' => 'Ryan',
             'year_birth' => 2001,
             'gender' => 'M',
             'nationality' => 'Brasileiro'
         ]);

        \App\Models\Gender::create([
            'name' => 'Ficção',
        ]);

        \App\Models\Publisher::create([
            'name' => 'altar books',
            'description' => 'Desde 1975 produzindo mais do que livros'
        ]);
    }
}
