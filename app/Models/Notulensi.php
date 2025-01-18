<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
    protected $primaryKey = 'notulensi_id';

    protected $fillable = [
        'agenda_id',
        'conclusion',
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'agenda_id');
    }
}
