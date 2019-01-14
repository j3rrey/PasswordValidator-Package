
# Discontinued in favor of https://github.com/timacdonald/rule-builder 

Currently in development

## Installation 
Run `composer require j3rrey/laravel-password-validation`
and `php artisan vendor:publish` 

if asked choose `J3rrey\PasswordValidation\PasswordValidationServiceProvider` 

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
