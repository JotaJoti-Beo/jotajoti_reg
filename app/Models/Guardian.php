<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $fillable = [
        'parent_first_name',
        'parent_last_name',
        'parent_mail',
        'parent_phone',
        'reference'
    ];

    public $timestamps = true;
}
