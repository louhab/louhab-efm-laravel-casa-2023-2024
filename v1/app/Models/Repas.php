<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Repas extends Model
{
    use HasFactory;
    protected $table = 'repas';
    protected  $fillable= ['intitule','description','categorie_id'];
    public function categirie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
