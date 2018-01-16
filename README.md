Package provides simple [JediFaker](https://github.com/HydrefLab/jedi-faker) binding into Laravel factories.

JediFaker is an extension for Faker data generator. It does not affect original Faker in any way.

## Installation

```sh
composer require hydreflab/laravel-jedi-faker
```

## Service provider registration

No service provider registration in `app.php` is needed. Package uses Laravel auto discovery feature.

However, if for some reason you don't want to use auto discovery, disable that in your application's `composer.json` file:
```json
"extra": {
    "laravel": {
        "dont-discover": [
            "hydreflab/laravel-jedi-faker"
        ]
    }
},
```
Then manually register `HydrefLab\Laravel\JediFaker\JediFakerServiceProvider::class` service provider.

## Basic usage

New features added by JediFaker package can be used straight away in your Laravel factories:
```php
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->character,
        'email' => $faker->unique()->safeEmail,
        'planet' => $faker->planet,
        'species' => $faker->species,
        'vehicle' => $faker->vehicle,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
```

For more details, check [JediFaker repository](https://github.com/HydrefLab/jedi-faker).

_Note: JediFaker package only adds new formatters and is not extending/overriding Faker generator, 
therefore IDE autocompletion will not work for newly added features._

## Copyright and license

Package is licensed for use under the MIT License (MIT). Please, see [LICENSE][] for more information.

[license]: https://github.com/hydreflab/laravel-jedi-faker/blob/master/LICENSE