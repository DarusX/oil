<?php

use Illuminate\Database\Seeder;
use App\Classification;
use App\Currency;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'name' => 'admin'
        ]);

        Classification::create([
            'classification' => 'WTI Crude'
        ]);
        Classification::create([
            'classification' => 'Brent Crude'
        ]);
        Classification::create([
            'classification' => 'Mexican Basket'
        ]);

        Currency::create([
            'currency' => 'Dólar Americano',
            'sign' => '$'
        ]);
        Currency::create([
            'currency' => 'Euro',
            'sign' => '€'
        ]);
        Currency::create([
            'currency' => 'Libra Esterlina',
            'sign' => '£'
        ]);
    }
}
