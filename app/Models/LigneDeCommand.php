<?php

namespace App\Models;

use App\Models\Command;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LigneDeCommand extends Model
{
    
    
    use HasFactory;


    protected $fillable = [
        'commands_id',
        'product_id',
        'quantite',
        'prix_unitaire',
    ];


    public function command()
    {
        return $this->belongsTo(Command::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
