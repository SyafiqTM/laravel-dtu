<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();

        $blogs = [
            [
                'id' => 1,
                'category_id' => '1',
                'tags_id' => '2',
                'title'=> 'Run Your Business Through Out World',
                'slug'=> 'run-your-business-throughout-world',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?',
                'author' => '1',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'category_id' => '2',
                'tags_id' => '1',
                'title'=> 'Information Regarding Water Purifier System',
                'slug'=> 'informative-water-purify-system',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?',
                'author' => '1',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'category_id' => '3',
                'tags_id' => '1',
                'title'=> 'Health Management System Help Erderly',
                'slug'=> 'health-management-system-help-erderly',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?',
                'author' => '1',
                'pic_id'=> '1',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($blogs as $key => $value) {
            // User::create($value);
            $blog = new Blog;
            $blog->category_id = $value['category_id'];
            $blog->tags_id = $value['tags_id'];
            $blog->title = $value['title'];
            $blog->slug = $value['slug'];
            $blog->content = $value['content'];
            $blog->author = $value['author'];
            $blog->pic_id = $value['pic_id'];
            $blog->created_at = $value['created_at'];
            $blog->updated_at = $value['updated_at'];
            $blog->save();
        }
    }
}
