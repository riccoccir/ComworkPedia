<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsClient extends Model
{
    protected $table = 'msclient';
    protected $primaryKey = 'client_id';
    protected $fillable = ['client_email', 'client_name', 'client_password', 'client_phoneNumber'];
    
}
