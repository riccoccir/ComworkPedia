<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Auth\EloquentUserProvider;

class MsClient extends Authenticatable
{
    protected $guard = 'client';

    protected $fillable = ['client_email', 'client_name', 'client_password', 'client_phoneNumber'];
    protected $table = 'msclient';
}
