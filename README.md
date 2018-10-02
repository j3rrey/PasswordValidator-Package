[![Latest Stable Version](https://poser.pugx.org/prokawsar/password-validator/v/stable)](https://packagist.org/packages/prokawsar/password-validator)
[![Build Status](https://travis-ci.org/prokawsar/PasswordValidator-Package.svg?branch=master)](https://travis-ci.org/prokawsar/PasswordValidator-Package)
[![StyleCI](https://github.styleci.io/repos/149725750/shield?branch=master)](https://github.styleci.io/repos/149725750)
[![Total Downloads](https://poser.pugx.org/prokawsar/password-validator/downloads)](https://packagist.org/packages/prokawsar/password-validator)
[![License](https://poser.pugx.org/prokawsar/password-validator/license)](https://packagist.org/packages/prokawsar/password-validator)


# Simple password validation rules for Laravel

Currently in development

## Installation 
- [x] Run `composer require j3rrey/laravel-password-validation`
- [x] Then run `php artisan vendor:publish` and select `Provider: j3rrey/laravel-password-validation\PasswordValidatorServiceProvider` package 

All rules will be published in the App/Rules folder.


## How to use this package

Add `use App\Rules\{RuleName};` beneath your namespace and add a rule in a Validator::make call as `new RuleName`


Example: 
```php
<?php
  use App\Rules\Uppercase;

  return Validator::make($data, [
      'email' => 'required|string|email|max:255|unique:users',
            
      'password' => ['required|string|min:8|confirmed', new Uppercase],

  ]);
```
## Customization

You can set your own `error` messages

To change error messages go to `App\Rules\{RuleName}` and modify the return value in the `message()` function.
