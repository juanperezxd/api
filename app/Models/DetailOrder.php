<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'orders_id'
    ];

    public function product(){
        return $this->belongsTo('App\Models\Products','product_id');
    }

    public function orders(){
        return $this->belongsTo('App\Models\Orders','orders_id');
    }

}
