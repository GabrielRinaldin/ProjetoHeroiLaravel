<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Vilao extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $table = 'viloes';

    protected $fillable =
     [
        'name',
        'image',
        'levelpower',
        'heigth',
        'weigth',
        'status',
     ];
}
