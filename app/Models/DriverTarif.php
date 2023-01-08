<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTarif extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'quantity',
        'unit',
        'price',
    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function drivers() { return $this->hasMany(Driver::class); }
}
