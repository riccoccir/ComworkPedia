<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MsArtist extends Authenticatable
{

    protected $guard = 'artist';

    protected $fillable = ['artist_email', 'artist_name', 'artist_password', 'artist_phoneNumber', 'artist_instagram', 'artist_webiste'];
    protected $table = 'msartist';
}
