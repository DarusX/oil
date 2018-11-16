<?php

use Illuminate\Database\Seeder;
use App\Classification;
use App\Currency;
use App\User;
use App\Module;
use App\Role;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ExchangeController;
use App\Solution;
use App\Http\Controllers\PriceController;

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

        Role::create([
            'role' => 'Administrador'
        ])->users()->createMany([[
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'name' => 'admin'
        ]]);
        Role::create([
            'role' => 'Editor'
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

        Module::create([
            'module' => 'Posts'
        ])->privileges()->createMany([
            ['privilege' => 'Crear'],
            ['privilege' => 'Ver'],
            ['privilege' => 'Editar'],
            ['privilege' => 'Eliminar'],
        ]);
        Module::create([
            'module' => 'Banners'
        ])->privileges()->createMany([
            ['privilege' => 'Crear'],
            ['privilege' => 'Ver'],
            ['privilege' => 'Editar'],
            ['privilege' => 'Eliminar'],
        ]);
        factory(Solution::class, 10)->create();
        
        App::make(ExchangeController::class)->index();
        App::make(PriceController::class)->index();
    }
}
