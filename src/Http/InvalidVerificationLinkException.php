<?php

namespace Squipix\LaravelVerifyNewEmail\Http;

use Illuminate\Auth\AuthenticationException;

class InvalidVerificationLinkException extends AuthenticationException
{
}
