<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function facturas()
    {
        return $this->belongsToMany(Factura::class);
    }
}
