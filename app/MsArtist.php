<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsArtist extends Model
{
    protected $fillable = ['artist_email', 'artist_name', 'artist_password', 'artist_phoneNumber', 'artist_instagram', 'artist_webiste'];
    protected $table = 'msartist';
}
