<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseParaguay extends Model
{
    use HasFactory;

    protected $table = 'expense_paraguay';
    protected $guarded = ['id'];

    protected $dates = [
        'date'
    ];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
