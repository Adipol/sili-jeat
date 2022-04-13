<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseSalvador extends Model
{
    use HasFactory;

    protected $table = 'expense_salvador';
    protected $guarded = ['id'];

    protected $dates = [
        'date'
    ];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
