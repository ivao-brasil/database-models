<?php

namespace IvaoBrasil\Factories\SupportAward;

use Illuminate\Database\Eloquent\Factories\Factory;
use IvaoBrasil\Models\SupportAward\Report;
use IvaoBrasil\Models\Core\User;
use IvaoBrasil\Models\TrainingSchedule\TrainingSession;

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
            "connectionType" => "PILOT",
            "callsign" => $this->faker->text(8),
            "status" => $this->faker->randomElement(["VALIDATING", "REJECTED", "APPROVED"]),
            "owner_vid" => User::factory(),
            "session_id" => TrainingSession::factory()
        ];
    }
}
