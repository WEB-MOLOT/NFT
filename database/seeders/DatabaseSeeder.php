<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        User::create([
            'name' => 'admin',
            'group' => User::GROUP_ADMIN,
            'email' => 'no-reply@local.me',
            'password' => Hash::make('qweasd')
        ]);
    }
}
