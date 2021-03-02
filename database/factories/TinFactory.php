<?php

namespace Database\Factories;

use App\Models\Tin;
use Illuminate\Database\Eloquent\Factories\Factory;

class TinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tin::class;
      
       
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thu_tu'=>1,
            'tieu_de'=>$this->faker->text,
            'noi_dung'=>$this->faker->text,
            'loaitin_id'=>1
        ];
    }
}
