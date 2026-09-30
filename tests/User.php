<?php

namespace Squipix\LaravelVerifyNewEmail\Tests;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Squipix\LaravelVerifyNewEmail\MustVerifyNewEmail;

class User extends Authenticatable
{
    use MustVerifyNewEmail, Notifiable;

    protected $guarded = [];
}
