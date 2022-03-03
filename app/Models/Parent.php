<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'mail',
    ];

    public $timestamps = true;
}
