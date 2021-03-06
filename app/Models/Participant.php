<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';

    protected $fillable = [
        'scout_name',
        'first_name',
        'last_name',

        'tn_phone',
        'tn_mail',

        'parent_name',
        'parent_phone',
        'parent_mail',

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

    public function place()
    {
        return $this->hasOne('App\Models\Place');
    }

    public function group()
    {
        return $this->hasOne('App\Models\Group');
    }
}
