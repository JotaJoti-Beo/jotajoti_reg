<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';

    protected $fillable = [
        'scout_name',
        'first_name',
        'last_name',

        'phone',
        'mail',

        'guardian_id',

        'place_id',

        'eating_habits',
        'allergies',

        'group_id',
        'birthday',
        'gender',

        'pio_day',

        'bring_laptop',
        'photos_allowed',

        'accept_agb',

        'uuid',
        'reference',
    ];

    public $timestamps = true;

    public function place()
    {
        return $this->hasOne(Place::class);
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function parent()
    {
        return $this->hasOne(parent::class);
    }
}
