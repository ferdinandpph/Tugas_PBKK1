<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['orders_id', 'Metode_Pembayaran', ];

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'orders_id');

    }
}

