<?php


namespace IvaoBrasil\Factories\Academy;


use Illuminate\Database\Eloquent\Factories\Factory;
use IvaoBrasil\Models\Academy\Manual;

class ManualFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manual::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->unique()->sentence,
            "description" => $this->faker->paragraph,
            "language" => $this->faker->languageCode,
            "file_path" => "test.pdf",
            "is_visible" => $this->faker->boolean
        ];
    }
}