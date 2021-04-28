<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $arr = ["Пётр","Василий","Иван","Саня","Алексей"];
        $description = " Не говоря уже о том, что в прошлом году было слишком вызывающим поступком со 
          стороны критиков пройти мимо актерской работы Хопкинса в фильме «Два папы». Для молодых 
          членов Академии, может быть, он и слишком консервативный выбор, но его награждение точно 
          не вызовет скандала.";

        for($i=1;$i<100;$i++)
            DB::table('comments')->insert([
                'name' => $arr[random_int(0,4)],
                'comment' => $i." комментарий " . $description,
                'post_id' => random_int(1,40),

            ]);
    }

}
