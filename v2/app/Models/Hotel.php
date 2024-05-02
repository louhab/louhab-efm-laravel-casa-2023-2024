<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pay;
use App\Models\Reservation;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotel';
    protected  $fillable= ['nom','description','nombreetoilles','idpays'];
    public function pays()
    {
        return $this->belongsTo(Pay::class, 'idpays');
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservation_hotel', 'idhotel', 'idreservation');
    }
}
