<?php

namespace Database\Seeders;

use App\Enum\Roles;
use App\Enum\RolesEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ex.com',
        ]);
        $admin->assignRole(RolesEnum::Admin->value);

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@ex.com',
        ]);
        $user->assignRole(RolesEnum::User->value);

        $vendor =  User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@ex.com',
        ]);
        $vendor->assignRole(RolesEnum::Vendor->value);

        $istiak = User::factory()->create([
            'name' => 'Istiak Ahmmed Akash',
            'email' => 'ist14k.akash@gmail.com',
        ]);
        $istiak->assignRole(RolesEnum::Admin->value);
    }
}
