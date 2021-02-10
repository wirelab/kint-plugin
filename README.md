# Kint plugin
## ⚠️ This repository has been deprecated ⚠️
Better debugging for PyroCMS 3

## Installation
`composer require wirelab/kint-plugin`

## usage
```twig
your_variable|d
your_variable|ddd
your_variable|s
your_variable|sd

d(your_variable)
ddd(your_variable)
s(your_variable)
sd(your_variable)
```

### Improving performance
1. In `config/app.php` add `Conner\Kint\KintServiceProvider::class` to the `$providers` array
2. `php artisan vendor:publish`
3. In `config/kint.php` change `maxLevels` to `3`

For more details please see [laravel-kint](https://github.com/rtconner/laravel-kint/tree/laravel-5)
