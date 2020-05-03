<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MsClient extends Authenticatable
{

    use Notifiable;

    protected $guard = 'client';

    protected $fillable = ['client_email', 'client_name', 'client_password', 'client_phoneNumber'];
    protected $table = 'msclient';
}
