<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    protected $fillable = [
        'place_name',
        'place_address',
        'place_city',
        'place_plz',
        'place_max_tn',
    ];
}
