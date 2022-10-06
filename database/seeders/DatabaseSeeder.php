<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comments;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            CommentSeeder::class,
            TagsSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
        ]);
    }
}
