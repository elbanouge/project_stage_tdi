<?php

namespace Database\Factories;

use App\Models\PollAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PollAnswerFactory extends Factory
{
    /**
     * The name of the factory"s corresponding model.
     *
     * @var string
     */
    protected $model = PollAnswer::class;

    /**
     * Define the model"s default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "ip" => $this->faker->ipv4,
            "option_id" => "",
            "poll_id" => "",
            "created_at" =>  $this->faker->dateTime,
            "updated_at" =>  $this->faker->dateTime,
        ];
    }
}
