<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'sku' => $this->faker->randomElement(range('A', 'Z'), 5),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
        ];
    }
}
