<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence($nbWords = 10,),
            'description'=>$this->faker->sentence($nbWords = 30,),
            'slug'=>$this->faker->word(),
            'price'=>$this->faker->numberBetween(300,500),
            'sale_price'=>$this->faker->numberBetween(100,200),
            'stock'=>$this->faker->numberBetween(30,50),
            'gallery'=>$this->faker->randomElement(['imgs/product-1.jpg','imgs/product-2.jpg','imgs/product-4.jpg','imgs/product-5.jpg','imgs/product-6.jpg','imgs/product-7.jpg']),
            'preview_image'=>$this->faker->randomElement(['imgs/product-1.jpg','imgs/product-2.jpg','imgs/product-4.jpg','imgs/product-5.jpg','imgs/product-6.jpg','imgs/product-7.jpg'])
        ];
    }
}
