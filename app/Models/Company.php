<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'licence_number',
        'expiry_date',
        'working',
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function tarifs() { return $this->hasMany(Tarif::class); }
    public function agents() { return $this->hasMany(Agent::class); }
    public function locations() { return $this->hasMany(Location::class); }
    public function orders() { return $this->hasMany(Order::class); }
    public function driverTarifs() { return $this->hasMany(DriverTarif::class); }
    public function drivers() { return $this->hasMany(Driver::class); }
    public function accountings() { return $this->hasMany(Accounting::class); }
}
