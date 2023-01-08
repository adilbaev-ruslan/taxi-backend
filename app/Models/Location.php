<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'latitude',
        'longitude',
    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function satartOrders() { return $this->hasToMany(Order::class, 'start_location_id'); }
    public function endOrders() { return $this->hasToMany(Order::class, 'end_location_id'); }
    public function drivers() { return $this->hasMany(Driver::class); }
}
