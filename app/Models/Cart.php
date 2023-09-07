<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','product_id','quantity','price',
    ];

    public function user(){
        return $this->belongsTo(Contact::class, 'user_id');
    }

    public function product(){
        return $this->belongsTo(Contact::class, 'product_id');
    }
}
