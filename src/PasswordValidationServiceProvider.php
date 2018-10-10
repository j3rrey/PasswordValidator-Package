<?php

namespace J3rrey\PasswordValidation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use J3rrey\PasswordValidation\Rules;

class PasswordValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/Rules' => app_path('/Rules'),
        ]);

        Validator::extend('uppercase', function ($attribute, $value, $parameters, $validator) {
            return new Rules\Uppercase();
        });

        Validator::extend('lowercase', function ($attribute, $value, $parameters, $validator) {
            return new Rules\Lowercase();
        });

        Validator::extend('digit', function ($attribute, $value, $parameters, $validator) {
            return  new Rules\Digit();
        });

        Validator::extend('standard', function ($attribute, $value, $parameters, $validator) {
            return  new Rules\Digit();
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
