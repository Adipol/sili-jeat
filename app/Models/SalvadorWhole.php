<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalvadorWhole extends Model
{
    use HasFactory;

    protected $table = 'salvador_wholes';

    protected $guarded = ['id'];


    protected $dates = [
        'date'
    ];
}
