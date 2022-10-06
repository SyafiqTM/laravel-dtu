<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tags;
class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::truncate();

        $tags = [
            [
                'id' => 1,
                'title'=> 'Food',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title'=> 'Technology',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title'=> 'Entertainment',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($tags as $key => $value) {
            // User::create($value);
            $tag = new Tags;
            $tag->title = $value['title'];
            $tag->pic_id = $value['pic_id'];
            $tag->created_at = $value['created_at'];
            $tag->updated_at = $value['updated_at'];
            $tag->save();
        }
    }
}
