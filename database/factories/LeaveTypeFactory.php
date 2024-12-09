<?php

namespace Database\Factories;

use App\Enums\LeaveType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeaveType>
 */
class LeaveTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $leaveTypes = [LeaveType::ANNUAL, LeaveType::SICK, LeaveType::UNPAID, LeaveType::EARNED, LeaveType::MATERNITY, LeaveType::PATERNITY, LeaveType::SPECIAL, LeaveType::OTHER];

        return [
            'type' => $this->faker->unique()->randomElement($leaveTypes),
            'total_days' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
