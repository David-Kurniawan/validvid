# Laravel Validation Standalone Library

[![Build Status](https://img.shields.io/travis/David-Kurniawan/validvid.svg?style=flat-square)](https://travis-ci.org/David-Kurniawan/validvid)
[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://doge.mit-license.org)

## Requirements
* PHP 7.1 or higher
* Composer for installation

## Installation

```sh
$ composer require david-kurniawan/validvid
```

## Usage

```php
use Validvid\Validation\Validator;

$data['email'] = 'foobar@gmail.com';
$rules = ['email' => 'required|email|not_in:foobar@gmail.com'];
$errors = null;

$validator = (new Validator())->make($data, $rules);
if ($validator->fails()) {
    $errors = $validator->errors();
}

return $errors;
```

More usage: [Laravel Validation](https://laravel.com/docs/6.x/validation)