<?php

namespace IvaoBrasil\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use IvaoBrasil\Models\Report;
use IvaoBrasil\Models\User;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id" => $this->faker->numberBetween(),
            "connectionType" => "PILOT",
            "callsign" => $this->faker->text(8),
            "status" => $this->faker->randomElement(["VALIDATING", "REJECTED", "APPROVED"]),
            "owner_vid" => User::factory()
        ];
    }
}
