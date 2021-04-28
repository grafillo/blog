<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ["Пётр","Василий","Иван","Саня","Алексей"];
        $description = "С одной стороны, награждение Хопкинса ничего 
        существенно не добавит его карьере. Он и так очень востребован.
         А репутация его безупречна. Но, с другой стороны, странно, что
          один из величайших актеров современности хранит дома лишь один 
          Оскар. Не говоря уже о том, что в прошлом году было слишком вызывающим поступком со 
          стороны критиков пройти мимо актерской работы Хопкинса в фильме «Два папы». Для молодых 
          членов Академии, может быть, он и слишком консервативный выбор, но его награждение точно 
          не вызовет скандала.";

        for($i=1;$i<40;$i++)
            DB::table('posts')->insert([
                'name' => $arr[random_int(0,4)],
                'title' => $i." Статья ",
                'description' =>"Текст статьи № " . $i. $description,

            ]);
    }
}
