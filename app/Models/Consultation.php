<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pet_id',
        'start_time',
        'end_time',
        'cost'
    ];

    public function pet() {
    return $this->belongsTo(Pet::class, 'pet_id');
    }
}