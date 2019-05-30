<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [

      'title'=> $faker->word(6),
      'content'=> $faker->text($maxNbChars = 200) 
    ];
});
