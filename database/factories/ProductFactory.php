<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
//namespace database\factories;
use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker){
    $brands = \App\Models\brand::select('brand_id')->get()->toArray();
    $name = $faker->name;
    return [
        'product_name' => $name,
        'product_slug' => str_slug($name),
        'sku' => $faker->numberBetween(10000000,99999999),
        'brand_id' => array_rand($brands),
        'buy_price' => $faker->numberBetween(100,500),
        'sale_price' => $faker->numberBetween(500,10000),
        'made_in' => $faker->country,
        'quantity' => $faker->numberBetween(1,100),
        'weight' => $faker->numberBetween(1,10),
        'description' => $faker->text
    ];
});