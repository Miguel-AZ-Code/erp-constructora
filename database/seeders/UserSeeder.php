<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // cliente
            'tipo_C' => fake()->randomElement(['N','J']),
            'NIT' => fake()->randomNumber(5, true),
            // empleado
            'ci' => fake()->randomNumber(8, true),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'fecha_n' => fake()->date(),
            'sexo' => fake()->randomElement(['M','F']),
            'salario' => fake()->randomFloat(2,500,2000),
            'T_E' => fake()->randomElement(['Y','N']),
            'T_C' => fake()->randomElement(['Y','N']),
            // --
            'remember_token' => Str::random(10),
            'permissions' => null,
        ]);
        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // cliente
            'tipo_C' => fake()->randomElement(['N','J']),
            'NIT' => fake()->randomNumber(5, true),
            // empleado
            'ci' => fake()->randomNumber(8, true),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'fecha_n' => fake()->date(),
            'sexo' => fake()->randomElement(['M','F']),
            'salario' => fake()->randomFloat(2,500,2000),
            'T_E' => fake()->randomElement(['Y','N']),
            'T_C' => fake()->randomElement(['Y','N']),
            // --
            'remember_token' => Str::random(10),
            'permissions' => null,
        ]);
        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // cliente
            'tipo_C' => fake()->randomElement(['N','J']),
            'NIT' => fake()->randomNumber(5, true),
            // empleado
            'ci' => fake()->randomNumber(8, true),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'fecha_n' => fake()->date(),
            'sexo' => fake()->randomElement(['M','F']),
            'salario' => fake()->randomFloat(2,500,2000),
            'T_E' => fake()->randomElement(['Y','N']),
            'T_C' => fake()->randomElement(['Y','N']),
            // --
            'remember_token' => Str::random(10),
            'permissions' => null,
        ]);
        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // cliente
            'tipo_C' => fake()->randomElement(['N','J']),
            'NIT' => fake()->randomNumber(5, true),
            // empleado
            'ci' => fake()->randomNumber(8, true),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'fecha_n' => fake()->date(),
            'sexo' => fake()->randomElement(['M','F']),
            'salario' => fake()->randomFloat(2,500,2000),
            'T_E' => fake()->randomElement(['Y','N']),
            'T_C' => fake()->randomElement(['Y','N']),
            // --
            'remember_token' => Str::random(10),
            'permissions' => null,
        ]);
        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // cliente
            'tipo_C' => fake()->randomElement(['N','J']),
            'NIT' => fake()->randomNumber(5, true),
            // empleado
            'ci' => fake()->randomNumber(8, true),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'fecha_n' => fake()->date(),
            'sexo' => fake()->randomElement(['M','F']),
            'salario' => fake()->randomFloat(2,500,2000),
            'T_E' => fake()->randomElement(['Y','N']),
            'T_C' => fake()->randomElement(['Y','N']),
            // --
            'remember_token' => Str::random(10),
            'permissions' => null,
        ]);
        DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // cliente
            'tipo_C' => fake()->randomElement(['N','J']),
            'NIT' => fake()->randomNumber(5, true),
            // empleado
            'ci' => fake()->randomNumber(8, true),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->address(),
            'fecha_n' => fake()->date(),
            'sexo' => fake()->randomElement(['M','F']),
            'salario' => fake()->randomFloat(2,500,2000),
            'T_E' => fake()->randomElement(['Y','N']),
            'T_C' => fake()->randomElement(['Y','N']),
            // --
            'remember_token' => Str::random(10),
            'permissions' => null,
        ]);
    }
}
