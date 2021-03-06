<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Analytics\Domain\Models\StatsAge;

$factory->define(StatsAge::class, function (Faker $faker) {
    return [
        'stats_age_id' => 1,
        'ad_id' => 1,
        'advertiser_id' => 2,
        'visitors_number' => 155
    ];
});
