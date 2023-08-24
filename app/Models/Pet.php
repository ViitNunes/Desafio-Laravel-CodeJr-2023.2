<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'species',
        'breed',
        'birth_date',
        'owner_id',
        'treatments_done'
    ];


    //protected $guarded = [];
}
