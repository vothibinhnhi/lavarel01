<?php

namespace Database\Factories;

use App\Models\TheLoai;
use Illuminate\Database\Eloquent\Factories\Factory;

class TheLoaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TheLoai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'thu_tu'=>1,
            'tieu_de'=>$this->faker->text,
            'tieu_de_khong_dau'=>$this->faker->text,
            'tom_tat'=>$this->faker->text,
        ];
    }
}
