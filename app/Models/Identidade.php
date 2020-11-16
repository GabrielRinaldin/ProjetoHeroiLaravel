<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Identidade extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    
     protected $table = 'identidades';
     protected $fillable =
     [
        'identity',
        'image',
        'heroi_id',
     ];

     public function heroi()
     {
        return $this->hasOne(Heroi::class, 'heroi_id');
     }
}
