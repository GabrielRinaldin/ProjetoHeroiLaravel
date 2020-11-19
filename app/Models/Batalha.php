<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Batalha extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $table = 'batalhas';

    protected $fillable = ['batalha', 'descricao', 'datainicio', 'datafim'];

    public function heroisbatalha()
    {
     return $this->hasMany(HeroisBatalha::class);
    }
}
