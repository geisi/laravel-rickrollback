# Laravel Rickrollback

[![Latest Version on Packagist](https://img.shields.io/packagist/v/geisi/laravel-rickrollback.svg?style=flat-square)](https://packagist.org/packages/geisi/laravel-rickrollback)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/geisi/laravel-rickrollback/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/geisi/laravel-rickrollback/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/geisi/laravel-rickrollback/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/geisi/laravel-rickrollback/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/geisi/laravel-rickrollback.svg?style=flat-square)](https://packagist.org/packages/geisi/laravel-rickrollback)

Ever been tempted to roll back your migrations? This package is here to make sure you **never give up** on your
database! Laravel Rickrollback disables the `php artisan migrate:rollback` command by throwing a "Never Let You Down"
exception. Inspired by Rick Astley's timeless classic, it's a fun way to enforce forward-only migrations in your Laravel
application.

## Installation

You can install the package via Composer:

```bash
composer require geisi/laravel-rickrollback
```

## Usage

Once installed, the package automatically overrides the default migrate:rollback command. If you attempt to run it,
you'll be greeted with a "Never Let You Down" experience.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
