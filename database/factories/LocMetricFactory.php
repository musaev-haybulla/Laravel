<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocMetric;
use Faker\Generator as Faker;

$factory->define(LocMetric::class, function (Faker $faker) {
    return [
        'directories' => random_int(0, 100),
        'files' => random_int(0, 100),
        'loc' => random_int(0, 100),
        'lloc' => random_int(0, 100),
        'lloc_classes' => random_int(0, 100),
        'lloc_functions' => random_int(0, 100),
        'lloc_global' => random_int(0, 100),
        'cloc' => random_int(0, 100),
        'ccn' => random_int(0, 100),
        'ccn_methods' => random_int(0, 100),
        'interfaces' => random_int(0, 100),
        'traits' => random_int(0, 100),
        'classes' => random_int(0, 100),
        'abstract_classes' => random_int(0, 100),
        'concrete_classes' => random_int(0, 100),
        'functions' => random_int(0, 100),
        'named_functions' => random_int(0, 100),
        'anonymous_functions' => random_int(0, 100),
        'methods' => random_int(0, 100),
        'public_methods' => random_int(0, 100),
        'non_public_methods' => random_int(0, 100),
        'non_static_methods' => random_int(0, 100),
        'static_methods' => random_int(0, 100),
        'constants' => random_int(0, 100),
        'class_constants' => random_int(0, 100),
        'global_constants' => random_int(0, 100),
        'test_classes' => random_int(0, 100),
        'test_methods' => random_int(0, 100),
        'ccn_by_lloc' => random_int(0, 1000) / 100,
        'lloc_by_nof' => random_int(0, 1000) / 100,
        'method_calls' => random_int(0, 100),
        'static_method_calls' => random_int(0, 100),
        'instance_method_calls' => random_int(0, 100),
        'attribute_accesses' => random_int(0, 100),
        'static_attribute_accesses' => random_int(0, 100),
        'instance_attribute_accesses' => random_int(0, 100),
        'global_accesses' => random_int(0, 100),
        'global_variable_accesses' => random_int(0, 100),
        'super_global_variable_accesses' => random_int(0, 100),
        'global_constant_accesses' => random_int(0, 100),
        'class_ccn_min' => random_int(0, 100),
        'class_ccn_avg' => random_int(0, 1000) / 100,
        'class_ccn_max' => random_int(0, 100),
        'class_lloc_min' => random_int(0, 100),
        'class_lloc_avg' => random_int(0, 1000) / 100,
        'class_lloc_max' => random_int(0, 100),
        'method_ccn_min' => random_int(0, 100),
        'method_ccn_avg' => random_int(0, 1000) / 100,
        'method_ccn_max' => random_int(0, 100),
        'method_lloc_min' => random_int(0, 100),
        'method_lloc_avg' => random_int(0, 1000) / 100,
        'method_lloc_max' => random_int(0, 100),
        'namespaces' => random_int(0, 100),
        'ncloc' => random_int(0, 100),
    ];
});
