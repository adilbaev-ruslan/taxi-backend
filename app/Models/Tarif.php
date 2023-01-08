<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'base_quantity',
        'base_price',
        'quantity',
        'price',
    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function orders() { return $this->hasMany(Order::class); }
}
