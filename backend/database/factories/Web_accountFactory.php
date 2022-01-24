<?php

namespace Database\Factories;

use App\Models\Web_account;
use Illuminate\Database\Eloquent\Factories\Factory;

class Web_accountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Web_account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'password' => $this->faker->word,
        'note' => $this->faker->text,
        'account_category_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
