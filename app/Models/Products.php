<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image'
    ];

    public function cart(){
        return $this->hasMany(Contact::class, 'product_id');
    }
}
