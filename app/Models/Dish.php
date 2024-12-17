<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

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
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
