<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tracking_date' => $this->faker->date(),
            'priority' => $this->faker->randomElement(['critical', 'High', 'Low', ]),
            'status' => $this->faker->randomElement(['Finished', 'Complete', 'Inprogress', 'blocked' ]),
            'task' => $this->faker->text(50)
        ];
    }
}
