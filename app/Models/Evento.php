<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table='evento';
    use HasFactory;
    public function paises()
    {
        return $this->belongsTo(Pais::class,'id_pais','Pais');
    }
}
