<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseNicaragua extends Model
{
    use HasFactory;

    protected $table = 'expense_nicaragua';
    protected $guarded = ['id'];

    protected $dates = [
        'date'
    ];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
