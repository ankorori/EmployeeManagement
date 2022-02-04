<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Device::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'devics_number' => $this->faker->word,
        'company' => $this->faker->word,
        'pc_name' => $this->faker->word,
        'pc_account_id' => $this->faker->word,
        'ostype' => $this->faker->word,
        'is_cd_dvd_drive' => $this->faker->word,
        'is_wired_LAN' => $this->faker->word,
        'is_wireless_LAN' => $this->faker->word,
        'is_internet' => $this->faker->word,
        'is_taking_out' => $this->faker->word,
        'is_LanScopeCat' => $this->faker->word,
        'web_browser_id' => $this->faker->word,
        'mailer' => $this->faker->word,
        'antivirus_software' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
