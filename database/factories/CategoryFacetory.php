<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.s
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ten'=>$this->faker->name,
            'tieu_de' => $this->faker->text(),
            'an_hien' => $this->faker->numberBetween(0,1),
            
        ];
    }
}
