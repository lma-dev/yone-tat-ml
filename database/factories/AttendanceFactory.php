<?php

namespace Database\Factories;

use App\Enums\LeaveType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date(),
            'check_in' => $this->faker->time(),
            'check_out' => $this->faker->optional()->time(),
            'status' => $this->faker->randomElement([
                'ONSITE',
                LeaveType::SICK,
                LeaveType::ANNUAL,
                LeaveType::EARNED,
                LeaveType::MATERNITY,
                LeaveType::PATERNITY,
                LeaveType::UNPAID,
                LeaveType::SPECIAL,
                LeaveType::OTHER,
            ]),
            'note' => $this->faker->optional()->sentence(),
            'ip_address' => $this->faker->ipv4(),
            'device' => $this->faker->randomElement(['mobile', 'desktop']),
            'browser' => $this->faker->userAgent(),
            'platform' => $this->faker->randomElement(['windows', 'mac', 'linux']),
        ];
    }
}
