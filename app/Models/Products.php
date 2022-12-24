<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'count',
        'description',
        'user_id'
    ];
    public $timestamps = false;

    public function category(){
        return $this->hasMany(Products::class);
    }
}
