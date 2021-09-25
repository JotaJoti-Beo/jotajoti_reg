<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'file';

    protected $fillable = [
        'file_name',
        'participant_id'
    ];

    public function participant()
    {
        return $this->hasOne('App\Models\Participant');
    }
}
