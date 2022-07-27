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

        \App\Models\Author::insert([
            [
                'name' => 'Rober C. Martin',
                'year_birth' => '1952',
                'gender' => 'M',
                'nationality' => 'Dinamarca',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Katherine Paterson',
                'year_birth' => '1943',
                'gender' => 'F',
                'nationality' => 'Americana',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Christopher Nolan',
                'year_birth' => '1970 ',
                'gender' => 'M',
                'nationality' => 'Inglês',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Stephen Hawking',
                'year_birth' => '1942 ',
                'gender' => 'M',
                'nationality' => 'Inglês',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]);

        \App\Models\Gender::insert([
            [
                'name' => 'Educação',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Aventura',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Ficção científica',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Ciência Popular',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]);

        \App\Models\Publisher::insert([
            [
                'name' => 'Alta Books',
                'description' => 'Uma editora que está sempre reinventando-se',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Happer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Gryphus',
                'description' => 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Intrínseca',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]);

        \App\Models\Book::insert([
            [
                'author_id' => '1',
                'gender_id' => '1',
                'publisher_id' => '1',
                'title' => 'Codigo Limpo',
                'release_year' => '2008',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'author_id' => '2',
                'gender_id' => '2',
                'publisher_id' => '2',
                'title' => 'Bridge to Terabithia',
                'release_year' => '1980',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'author_id' => '3',
                'gender_id' => '3',
                'publisher_id' => '3',
                'title' => 'Interestelar',
                'release_year' => '2014',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'author_id' => '4',
                'gender_id' => '4',
                'publisher_id' => '4',
                'title' => 'Uma Breve Historia do Tempo',
                'release_year' => '1988',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
