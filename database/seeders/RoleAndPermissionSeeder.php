<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{



    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // $admin = Role::create(['name' => 'super-admin', 'guard_name' => 'web']);
        // $role_user = Role::create(['name' => 'user', 'guard_name' => 'web']);
        // $super_admin = User::create([
        //     'name' => 'hypervrse-admin',
        //     'email' => 'admin@hyperverse.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        //     'status' => 'enabled'
        // ]);
        $user = User::create([
            'name' => 'hypervrse-user',
            'email' => 'user@hyperverse.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'status' => 'enabled',
            // 'referral_link' => 'https://download.thehyperverse.net/#/?code=arpj78',
            'hc_link' => 'hello'
        ]);
        // $super_admin->assignRole($admin);
        // $user->assignRole($role_user);
    }
}
