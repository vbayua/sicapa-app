<?php

namespace Database\Factories;

use App\Models\Capa;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'status' => 'Pending',
            'persyaratan' => fake()->text('50'),
            'root_cause_analysis' => fake()->text('50'),
            'evaluation' => fake()->text('50'),
            'category_id' => Category::factory()->create(),
        ];
    }
}
