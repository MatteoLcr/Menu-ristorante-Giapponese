<?php

namespace App\Models;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'traduzione',
        'ideogramma',
    ];

    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }
}
