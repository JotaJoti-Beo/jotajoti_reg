<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';

    protected $fillable = [
        'reg_start',
        'jojo_start',
        'jojo_pio_start',
        'jojo_end',
        'max_tn'
    ];
}
