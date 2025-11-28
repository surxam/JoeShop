<?php

namespace App\Models;

use App\Models\User;
use App\Models\LigneDeCommand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Command extends Model
{
   use HasFactory;

   protected $fillable = [
        'user_id',
        'state',
        'montant_total',
        'adresse_livraison',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function lignesDeCommands()
    {
        return $this->hasMany(LigneDeCommand::class);
    }
}
