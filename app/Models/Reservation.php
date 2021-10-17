<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'numberPeople',
        'reservePrice',
        'reserveDate',
        'startDate',
        'endDate',
    ];
}
