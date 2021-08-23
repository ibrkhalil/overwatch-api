<?php

$factory->define(App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\SubRole::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Hero::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'role_id' => factory(App\Models\Role::class)->create()->id,
        'health' => $faker->numberBetween(100, 500),
        'armour' => $faker->numberBetween(0, 400),
        'shield' => $faker->numberBetween(0, 200),
        'real_name' => $faker->name,
        'age' => $faker->numberBetween(20, 90),
        'height' => $faker->numberBetween(170, 220),
        'affiliation' => $faker->company,
        'base_of_operations' => $faker->country,
        'difficulty' => $faker->numberBetween(1, 3),
    ];
});

$factory->define(App\Models\Ability::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
        'description' => $faker->paragraph,
        'hero_id' => factory(App\Models\Hero::class)->create()->id,
        'is_ultimate' => $faker->numberBetween(0, 1),
    ];
});

$factory->define(App\Models\RewardType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Currency::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Quality::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Reward::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
        'reward_type_id' => factory(App\Models\RewardType::class)->create()->id,
        'hero_id' => null,
        'cost' => 25,
        'currency_id' => factory(App\Models\Currency::class)->create()->id,
        'quality_id' => factory(App\Models\Quality::class)->create()->id,
        'event_id' => null,
    ];
});

$factory->define(App\Models\Achievement::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
        'description' => $faker->paragraph,
        'hero_id' => null,
        'reward_id' => factory(App\Models\Reward::class)->create()->id,
    ];
});

$factory->define(App\Models\Event::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
        'start_date' => $faker->date('Y-m-d'),
        'end_date' => $faker->date('Y-m-d'),
    ];
});

$factory->define(App\Models\MapMode::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Map::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
        'location' => $faker->country,
        'map_mode_id' => factory(App\Models\MapMode::class)->create()->id,
        'event_id' => null,
    ];
});

$factory->define(App\Models\MapStage::class, function (Faker\Generator $faker) {
    return [
        'map_id' => factory(App\Models\Map::class)->create()->id,
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Platform::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\GameMode::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});

$factory->define(App\Models\Brawl::class, function (Faker\Generator $faker) {
    return [
        'brawl_type_id' => factory(App\Models\BrawlType::class)->create()->id,
        'start_date' => $faker->date('Y-m-d'),
    ];
});

$factory->define(App\Models\BrawlType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->md5,
    ];
});
