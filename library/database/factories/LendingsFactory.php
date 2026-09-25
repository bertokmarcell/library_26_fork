<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\lendings;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<lendings>
 */
class LendingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'copy_id' => Copy::all()->random()->id,
        ];
    }
}
