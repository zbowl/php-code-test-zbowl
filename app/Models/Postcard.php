<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcard extends Model
{
    protected $table = 'postcards';

    protected $fillable = [
        'recipient_name',
        'street_1',
        'street_2',
        'city',
        'state',
        'zip',
        'message',
    ];
}
