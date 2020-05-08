<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderHireTransaction extends Model
{
    protected $table = 'headerhiretransaction';
    protected $fillable = ['client_id','payment_id','image_from_client',
                            'image_from_artist','transacition_status','payment_amount',
                            'transfer_receipt'];
}
