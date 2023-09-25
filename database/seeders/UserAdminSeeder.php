<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Bouncer;
use Silber\Bouncer\BouncerFacade;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        BouncerFacade::allow('admin')->to('create-user');
        BouncerFacade::allow('support')->to('create-user');

        $admin->assign('admin');
        $admin->assign('support');

        $normalUser=User::create([
            'name' => 'normal user',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);
    }
}
