<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NicaraguaWhole extends Model
{
    use HasFactory;

    protected $table = 'nicaragua_wholes';

    protected $guarded = ['id'];

    protected $dates = [
        'date'
    ];
}
