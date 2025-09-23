<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \App\Models\Category;
use \App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'description' => $this->faker->sentence(),
            'slug' => Str::slug($name),
            'image_url' => $this->faker->imageUrl(400, 400),
            'category_id' => Category::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),

        ];
    }
}
