<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'id_category',
        'title',
        'description',
        'prix',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function products()
    {
        return $this->belongsToMany(Product::class)
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
}
