<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $user = User::all()->random();
        $faker = Faker::create();

        return [
            'user_id' => $user->id,
            'text' => $faker->text(99),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
