# LaravelBulmaComponents

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

View components and Sublime Text snippets to integrate Bulma.io easier into your Laravel 5.4 (or more) projects.

## Install

Via Composer

``` bash
$ composer require bittenbyte/laravel-bulma-components
```

## Setup

Add the service provider to your config/app.php
``` bash
BittenByte\LaravelBulmaComponents\LaravelBulmaComponentsServiceProvider::class,
```

optionally you can publish vendor assets and customize/modify those view components

```
php artisan vendor:publish
```

## Examples

Now just use components in your blade templates:

```
    {{-- Your blade stuff --}}
    
    @component('bulma::section')
        The content to render in the slot
    @endcomponent

    {{-- Your blade stuff --}}
```

or 

```
    {{-- Your blade stuff --}}
    
    @component('bulma::section')
        @slot('id') id="my-id" @endslot
        @slot('classes') is-primary @endslot
        Some primary section
    @endcomponent

    {{-- Your blade stuff --}}
```

## To-do

More blade sections to add and sublime snippet

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email support@bittenbyte.io instead of using the issue tracker.

## Credits

- [BittenByte][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.