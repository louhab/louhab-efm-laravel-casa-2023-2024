<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touriste extends Model
{
    use HasFactory;
    protected $table = 'touriste';
    public function pays()
    {
        return $this->belongsTo(Pays::class, 'idpays');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'idtouriste');
    }

}
