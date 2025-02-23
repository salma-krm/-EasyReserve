<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $table = 'salles';
    protected $fillable = ['title', 'photo','location','capacite','start_date','status', 'description'];
 
    use HasFactory;
    public function reservation(){
        return $this->haseMany(Reservation::class);
    }
    
}

