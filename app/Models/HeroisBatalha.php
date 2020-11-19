<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class HeroisBatalha extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $table = 'herois_batalhas';
    protected $fillable = ['heroi_id', 'batalha_id'];

    public function heroi()
    {
        return $this->belongsTo(Heroi::class);
    }

    public function batalha()
    {
        return $this->belongsTo(Batalha::class);
    }
}
