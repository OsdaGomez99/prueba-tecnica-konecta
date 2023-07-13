<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $fillable = [
        'producto_id',
        'cantidad'
    ];
    use HasFactory;

    public function producto ()
    {
        return $this->belongsTo('\App\Models\Producto');
    }
}
