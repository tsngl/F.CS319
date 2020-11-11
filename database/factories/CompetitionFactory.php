<?php

namespace Database\Factories;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompetitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Competition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $faker->title,
            'slug' => Str::slug($this->faker->title),
            'descuription' => $this->$faker->paragraph(rand(2,20)),
            'position' =>  $this->$faker->jobTitle,
            'address' => $this->$faker->address,
            'type' => "fullname",
            'status' => rand(0,1),
            'last_date' => $this->$faker->dateTime(),

        ];
    }
}
