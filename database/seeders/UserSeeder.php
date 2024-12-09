<?php

namespace Database\Seeders;

use App\Enums\AccountStatusType;
use App\Enums\UserRoleType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'SUPER ADMIN',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$/wQTKHDVTKcZXxqvgXHR5.yOr6vjBkHoErWrI0vhnHCs6rhF8LTRW',
            'account_status' => AccountStatusType::ACTIVE,
            'role' => UserRoleType::SUPER_ADMIN,
            'remember_token' => Str::random(10),
        ]);
        User::insert([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$/wQTKHDVTKcZXxqvgXHR5.yOr6vjBkHoErWrI0vhnHCs6rhF8LTRW',
            'account_status' => AccountStatusType::ACTIVE,
            'role' => UserRoleType::ADMIN,
            'remember_token' => Str::random(10),
        ]);
        User::insert([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$/wQTKHDVTKcZXxqvgXHR5.yOr6vjBkHoErWrI0vhnHCs6rhF8LTRW',
            'account_status' => AccountStatusType::ACTIVE,
            'role' => UserRoleType::MEMBER,
            'remember_token' => Str::random(10),
        ]);
        // $data = User::factory(5)->make();
        // $chunks = $data->chunk(10);
        // $chunks->each(function ($chunk) {
        //     User::insert($chunk->toArray());
        // });
    }
}
