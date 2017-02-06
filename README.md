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
php artisan vendor:publish --tag="views" --provider="BittenByte\LaravelBulmaComponents\LaravelBulmaComponentsServiceProvider"
```

If you want you want to use ST3 snippets we recommend you to symlink the snippets folder. To do that just:

```
# Clone this repo
cd ~/your-git-repos
git clone git@github.com:BittenByte/laravel-bulma-components.git
#cd to your sublime Packages/User folder, in our case (Mac Os X)
cd ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/User/
ln -s ~/your-git-repos/snippets bulma-snippets
``` 


## Examples

### Section (snippet `bl-section,tab`)

```
    {{-- Your blade stuff --}}
    
    @component('bulma::layout.section', ['id' => 'my-id', 'class' => 'is-blue'])
        my section content
    @endcomponent

    {{-- Your blade stuff --}}
```

### Section (snippet `bl-level,tab`)

```
    {{-- Your blade stuff --}}
    
    @component('bulma::components.level', ['class' => 'is-mobile'])
        {{-- Left/Right level starts here --}}
        @slot('leftSide') 
            <div class="level-item">
                something
            </div>
        @endslot
        @slot('rightSide')  @endslot
        {{-- Left/Right level ends here --}}
     
        {{-- Centered level starts here --}}
        
            <div class="level-item has-text-centered">
                something
            </div>
        {{-- Centered level ends here --}}
    @endcomponent

    {{-- Your blade stuff --}}
```

### Media (snippet `bl-media,tab`)

```
    {{-- Your blade stuff --}}

    @component('bulma::components.media', ['id' => 'my-id', 'class' => 'is-blue'])
        @slot('mediaLeft')
            <figure>
                <p class="image is-64x64">
                  <img src="http://bulma.io/images/placeholders/128x128.png">
                </p>
            </figure>
        @endslot
        your media content
    @endcomponent

    {{-- Your blade stuff --}}
```


### Media (snippet `bl-card,tab`)

```
    {{-- Your blade stuff --}}

    @component('bulma::components.card', [
        'id' => 'my-id',
        'class' => 'is-blue',
        'cardImage' => [
            'src' => 'http://bulma.io/images/placeholders/1280x960.png',
            'alt' => 'some alt attribute'
        ],
        ])
        @slot('header') My header @endslot
        my content
        @slot('footer') 
            <a class="card-footer-item">Save</a>
            <a class="card-footer-item">Edit</a>
            <a class="card-footer-item">Delete</a>
        @endslot
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