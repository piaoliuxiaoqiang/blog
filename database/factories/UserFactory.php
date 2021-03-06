<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    //$faker = Faker\Factory::create('zh_CN');
    //$faker = Faker\Factory::create(‘zh_CN‘);
    return [
        'title' => $faker->sentence(6),
        'content' => $faker->paragraph(10),
        'user_id'=>$faker->numberBetween($min = 1, $max = 100),
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'post_id' => $faker->numberBetween($min = 1, $max = 100),
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'content'=>$faker->paragraph(10),
    ];
});