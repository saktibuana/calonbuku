<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'count',
        'description',
        'user_id',
        'cover'
    ];

    public function category(){
        return $this->hasMany(Products::class);
    }
}
