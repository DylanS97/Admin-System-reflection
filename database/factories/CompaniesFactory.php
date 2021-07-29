<?php

namespace Database\Factories;

use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompaniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'logo' => $this->faker->image('storage/app/public', 100, 100, null, false),
            'website' => $this->faker->url(),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
