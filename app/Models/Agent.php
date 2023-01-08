<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'birth_date',
        'working',
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function company() { return $this->belongsTo(Company::class); }
    public function orders() { return $this->hasMany(Order::class); }
}
