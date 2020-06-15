<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrCommission extends Model
{
    protected $table = 'trcommission';
    protected $fillable = ['commission_type_id','artist_id','commission_name','commission_description',
                            'slot_available','commission_price','commission_duration','commission_image'];
}

