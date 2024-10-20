<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateProduct extends Model
{
    use HasFactory;
    public function Producte(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CateProduct::class,'products');
    }
}
