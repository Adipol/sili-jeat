<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuatemalaWhole extends Model
{
    use HasFactory;

    protected $table = 'guatemala_wholes';

    protected $guarded = ['id'];

    protected $dates = [
        'date'
    ];
}
