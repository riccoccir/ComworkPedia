<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class MsArtist extends Authenticatable
{
    use Notifiable;

    protected $guard = 'artist';

    protected $fillable = ['artist_email', 'artist_name', 'artist_password', 'artist_phoneNumber', 'artist_instagram', 'artist_webiste'];
    protected $table = 'msartist';
    protected $hidden = ['artist_password','remember_token'];
}
