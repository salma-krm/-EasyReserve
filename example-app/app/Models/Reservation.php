<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    
    protected $table = 'reservation';
    protected $fillable = ['name', 'date_debut', 'date_fine','status','user_id','salle_id'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function salle()
    {
        
        return $this->belongsTo(Salle::class);
    }
}
