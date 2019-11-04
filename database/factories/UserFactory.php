<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $name = $faker->name;
    $filePath = storage_path('images');


    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>bcrypt('123123'),
        'remember_token' => Str::random(10),
        'image' => $faker->image($filePath, 640,480),
        'user_friends_id' => [],
    ];
});
