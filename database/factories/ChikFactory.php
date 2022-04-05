<?php

namespace Database\Factories;

use App\Models\Chik;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chik>
 */
class ChikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Chik::class;
    public function definition()
    {
        return [
            "user_id"=>random_int(0,10),
            "body"=>$this->faker->sentence,
        ];
    }
}
