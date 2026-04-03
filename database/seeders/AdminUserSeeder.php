<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Upsert: jika username sudah ada, update — jika belum, insert baru.
        AdminUser::updateOrCreate(
            ['username' => 'adminkyh'],
            [
                'name'       => 'Admin KYH',
                'username'   => 'adminkyh',
                'password'   => Hash::make('adminkyh'),
                'role'       => 'superadmin',
                'is_active'  => true,
            ]
        );
    }
}
