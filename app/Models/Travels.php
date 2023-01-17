<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'user_id',
        'status',
        'type'
    ];
}
