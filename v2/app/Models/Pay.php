<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $table = 'pays';
    public function touristes()
    {
        return $this->hasMany(Touriste::class, 'idpays');
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'idpays');
    }

}
