<?php

namespace IvaoBrasil\Factories\TrainingSchedule;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use IvaoBrasil\Models\TrainingSchedule\TrainingSession;
use IvaoBrasil\Models\Core\User;

class TrainingSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainingSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "rating" => $this->faker->randomElement(["ADC", "APC", "ACC", "PP", "SPP", "CP"]),
            "type" => $this->faker->randomElement(["TRAINING", "EXAM"]),
            "occurrenceDate" => $this->faker->dateTimeThisMonth,
            "local" => Str::random(10),
            "owner_vid" => User::factory()
        ];
    }
}
