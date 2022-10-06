<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            [
                'id' => 1,
                'title'=> 'Business',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title'=> 'Informative',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title'=> 'Healthcare',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($categories as $key => $value) {
            // User::create($value);
            $category = new Category;
            $category->title = $value['title'];
            $category->pic_id = $value['pic_id'];
            $category->created_at = $value['created_at'];
            $category->updated_at = $value['updated_at'];
            $category->save();
        }
    }
}
