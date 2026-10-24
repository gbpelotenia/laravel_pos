<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin01',
            'full_name' => 'Juan Dela Cruz',
        ]);

        User::create([
            'username' => 'cashier01',
            'full_name' => 'Maria Santos',
        ]);

        User::create([
            'username' => 'cashier02',
            'full_name' => 'Pedro Reyes',
        ]);

        User::create([
            'username' => 'manager01',
            'full_name' => 'Ana Garcia',
        ]);

        User::create([
            'username' => 'staff01',
            'full_name' => 'Mark Lopez',
        ]);

        Customer::create([
            'full_name' => 'Carlos Mendoza',
            'email' => 'carlos@example.com',
            'phone' => '09171234567',
        ]);

        Customer::create([
            'full_name' => 'Angela Ramos',
            'email' => 'angela@example.com',
            'phone' => '09181234567',
        ]);

        Customer::create([
            'full_name' => 'Daniel Torres',
            'email' => 'daniel@example.com',
            'phone' => '09191234567',
        ]);

        Customer::create([
            'full_name' => 'Sofia Aquino',
            'email' => 'sofia@example.com',
            'phone' => '09201234567',
        ]);

        Customer::create([
            'full_name' => 'Michael Flores',
            'email' => 'michael@example.com',
            'phone' => '09211234567',
        ]);
    }
}