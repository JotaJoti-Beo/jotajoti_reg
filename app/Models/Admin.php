<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'reg_start',
        'jojo_start',
        'jojo_pio_start',
        'jojo_end',
        'max_tn'
    ];
}
