<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            ['id' => '1', 'name' => 'Побег из Шоушенка', 'duration' => '142', 'year' => '1994', 'genre' => 'драма', 'director' => 'Фрэнк Дарабонт'],
            ['id' => '2', 'name' => 'Крёстный отец', 'duration' => '175', 'year' => '1972', 'genre' => 'детектив', 'director' => 'Фрэнсис Форд Коппола'],
            ['id' => '3', 'name' => 'Тёмный рыцарь', 'duration' => '152', 'year' => '2008', 'genre' => 'боевик', 'director' => 'Кристофер Нолан'],
            ['id' => '4', 'name' => 'Крёстный отец 2', 'duration' => '202', 'year' => '1974', 'genre' => 'детектив', 'director' => 'Фрэнсис Форд Коппола'],
            ['id' => '5', 'name' => '12 разгневанных мужчин', 'duration' => '96', 'year' => '1957', 'genre' => 'детектив', 'director' => 'Сидни Люмет'],
            ['id' => '6', 'name' => 'Список Шиндлера', 'duration' => '197', 'year' => '1993', 'genre' => 'байопик', 'director' => 'Стивен Спилберг'],
            ['id' => '7', 'name' => 'Властелин колец: Возвращение короля', 'duration' => '201', 'year' => '2003', 'genre' => 'боевик', 'director' => 'Питер Джексон'],
            ['id' => '8', 'name' => 'Криминальное чтиво', 'duration' => '154', 'year' => '1994', 'genre' => 'детектив', 'director' => 'Квентин Тарантино'],
            ['id' => '9', 'name' => 'Властелин колец: Братство Кольца', 'duration' => '228', 'year' => '2001', 'genre' => 'боевик', 'director' => 'Питер Джексон'],
            ['id' => '10', 'name' => 'Хороший, плохой, злой', 'duration' => '177', 'year' => '1966', 'genre' => 'приключение', 'director' => 'Серджо Леоне'],
        ]);
    }
}
