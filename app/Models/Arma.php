<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Arma extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $table = 'armas';

    protected $fillable = ['name', 'heroi_id'];

    public function heroi()
     {
        return $this->belongsTo(Heroi::class, 'heroi_id' , 'id');
     }
}
