<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsClient extends Model
{
    protected $guard = 'client';

    protected $fillable = ['client_email', 'client_name', 'client_password', 'client_phoneNumber'];
    protected $table = 'msclient';
}
