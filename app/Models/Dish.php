<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'tag',
        'price',
        'allergeni',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}