# Laravel Bulma Components

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

- [BittenByte](http://www.bittenbyte.io)
- [Jose H. Milán](http://www.jmilan.net)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.