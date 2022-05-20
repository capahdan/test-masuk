<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->randomNumber(7, true),
            'name' => $this->faker->name(),
            'tingkat'=>mt_rand(1,4),
            'jurusan_id'=>$this->faker->numberBetween(1,9),
            'ip_terakhir'=>$this->faker->randomFloat(1,2,4),
            'jumlah_sks'=>$this->faker->numberBetween(18,24),
            'status_tinggal'=>$this->faker->state()
        ];
    }
}
