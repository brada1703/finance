<?php

use App\Price;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Price::class, 10000)->create();
        factory(User::class, 1)->create([
            'name' => ENV('USER_NAME'),
            'email' => ENV('USER_EMAIL'),
            'password' => bcrypt(ENV('USER_PASSWORD'))
        ]);
    }
}
