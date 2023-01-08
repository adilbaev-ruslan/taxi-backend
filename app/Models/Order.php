<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'agent_id',
        'tarif_id',
        'start_location_id',
        'end_location_id',
        'quantity',
        'price',
        'status_id',
    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function agent() { return $this->belongsTo(Agent::class); }
    public function tarif() { return $this->belongsTo(Tarif::class); }
    public function startLocation() { return $this->belongsTo(Location::class, 'start_location_id'); }
    public function endLocation() { return $this->belongsTo(Location::class, 'end_location_id', 'id'); }
    public function status() { reutrn $this->belongsTo(Status::class); }
}
