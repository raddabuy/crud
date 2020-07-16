<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([
                [
                    'name' => '1984',
                    'genre' => 'Утопия',
                    'author' => 'Оруэлл',
                    'year' => 1984
                ],
                [
                    'name' => 'Божественная комедия',
                    'genre' => 'Драма',
                    'author' => 'Данте',
                    'year' => 1606
                ],

            ]);
        }
        else{
            echo "Table is not empty";
        }
    }
}
