<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'user_id',
        'driver_tarif_id',
        'birth_date',
        'driving_licence_number',
        'expiry_date',
        'phone',
        'car_gov_number',
        'car_model_id',
        'active_date',
        'location_id',
        'working',
    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function user() { return $this->belongsTo(User::class); }
    public function driverTarif() { return $this->belongsTo(DriverTarif::class); }
    public function carModel() { return $this->belongsTo(CarModel::class); }
    public function location() { return $this->belongsTo(Location::class); }
    public function accountings() { return $this->hasMany(Accounting::class); }
}
