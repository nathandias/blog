# Laravel / Laracasts Notes

## starting a project

### WSL2 with Docker installed

    curl -s https://laravel.build/example-app | bash

    cd example-app

    ./vendor/bin/sail up

    # Choosing sail services, alternate curl command:

    curl -s "https://laravel.build/example-app?with=mysql,redis" | bash

    # available services are: mysql, pgsql, mariadb, redis, memcached, meilisearch, selenium, and mailhog

### Install with Composer

    composer create-project laravel/laravel example-app
    cd example-app
    php artisan serve

### Globally install Laravel

    composer global require laravel/laravel
    # edit .bashrc or similar to add ./composer/vendor/bin to system path
    cd example-app
    php artisan serve

## Chapter 1 & 2 Notes

routes/web.php - define routes
resources/views/ - define *.blade.php template files
storage/views/ - blade templates compiled down to php
app/Models/<ClassName>.php - define models
public/ - where static files compile down to, initial dir for static .css and .js files

### Tips and tricks

$array_result = array_map(function($item) {}, $items)

### Laravel specific
    collection($files)->map($callback)
    collection($items)->sortBy();
    collection($items)->firstWhere();

    dd($var); # dump and die
    ddd($var); # dump, die and debug (adds stack trace)

    use Spatie\YamlFrontMatter\YamlFrontMatter;
    $document = YamlFrontMatter::parseFile($file);
    $document->body();
    $documment->matter('title);
    $document->title;

    cache()->rememeber($unique_key, $duration, $value);
    cache()->rememberForever($unique_key, $value);
    cache()->forget();

Also: 
        php artisan tinker

### in web.php

    Route::get('/', function () { 
    
        return view('posts', [
            'posts' => Post::all(),
        ]);

    })->where('[A-z]+);  ## add a regular expression constraint

    Route::get('/post/{slug}, function($slug) {
        // return 'Hello, World!';  # a string
        return view('posts', [
            'key1' => $value1,
            ...
            'keyN' => $valueN
        ]);
    });

### blade templates
    {{ $variable }}
    {{ $object->property }}

    {!! $variable !!}     <!-- doesn't escape the html, so not for user content -->
    
    @foreach ($items as $item)
    ...
    @endforeach

    @if ($condition)
    @endif

    @unless ($condition)
    @
    

# alpinejs/alpine






