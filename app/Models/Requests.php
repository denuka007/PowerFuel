<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    protected $fillable = [
        'fid',
        'company',
        'district',
        'city',
        'density',
        'note',
        'status',
        'paymentstatus'
    ];
}
