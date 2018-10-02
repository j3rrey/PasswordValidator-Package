<?php

namespace J3rrey\PasswordValidation;

use Illuminate\Support\Facades\Facade;

class PasswordValidationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'password-validator';
    }
}
