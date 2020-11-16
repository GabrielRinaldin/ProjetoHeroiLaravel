<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use PHPUnit\Framework\MockObject\Builder\Identity;

class Heroi extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
     protected $table = 'herois';

     protected $fillable =
     [
        'name',
        'image',
        'levelpower',
        'heigth',
        'weigth',
        'status',
     ];

     public function identidade()
     {
        return $this->hasOne(Identidade::class);
     }
}
