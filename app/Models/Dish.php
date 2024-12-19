<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Laravel\Scout\Searchable;

class Dish extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'description',
        'tag',
        'price',
        'allergeni',
        'user_id',
    ];

    public function toSearchableArray(){
        return  [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'tag' => $this->tag,
            'category' => $this->category
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
