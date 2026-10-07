<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(4),
        'coursecover' => $faker->imageUrl(640, 480, 'technics'),
        'content' => $faker->paragraphs(3, true),
        'material_id' => $faker->numberBetween(1, 3),
    ];
});