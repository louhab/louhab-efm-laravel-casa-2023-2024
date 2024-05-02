<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    public function touriste()
    {
        return $this->belongsTo(Touriste::class, 'idtouriste');
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'reservation_hotel', 'idreservation', 'idhotel');
    }

}
