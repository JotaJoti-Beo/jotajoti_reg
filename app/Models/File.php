<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files';

    protected $fillable = [
        'name',
        'participant_id',
    ];

    public $timestamps = true;

    public function participant()
    {
        return $this->hasOne(\App\Models\Participant::class);
    }
}
