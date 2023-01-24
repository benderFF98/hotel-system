<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'social_security' => $this->faker->numberBetween(1111111, 9999999),
            'contact_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
        ];
    }
}
