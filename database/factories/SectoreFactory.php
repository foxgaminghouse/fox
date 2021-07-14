<?php

namespace Database\Factories;

use App\Models\Sectore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SectoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sectore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name'=> $name, 
            'slug' => Str::slug($name, '-'),
            'descripcion'=> $this->faker->paragraph(), 
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
