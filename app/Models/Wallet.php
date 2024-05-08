<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $guarded = [
        'id',
        'created_at'
    ];

    protected $hidden = [
        'number',
        'expiration',
        'cvc'
    ];
}
