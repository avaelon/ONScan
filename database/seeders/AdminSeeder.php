<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating Super admin user.
        $superAdmin = User::Create([
            'name' => 'Super Admin',
            'email' => 'employee@stats.com',
            'password' => Hash::make('12345678'),
            'designation' => 'Super Admin',
            'is_owner' => 1,
        ]);
    }
}
