<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuelstation extends Model
{
    protected $fillable = [
        'stationid',
        'company_name',
        'manager_name',
        'district',
        'address',
        'contact'
    ];
}
