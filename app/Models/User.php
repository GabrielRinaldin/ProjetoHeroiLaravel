<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Access;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accesses()
{
    // Não esqueça de usar a classe Access: use App\Models\Access;
    return $this->hasMany(Access::class);
}

    public function registerAccess()
    {
        // Cadastra na tabela accesses um novo registro com as informações do usuário logado + data e hora
        return $this->accesses()->create([
            'user_id'   => $this->id,
            'datetime'  => date('His'),
        ]);
    }
    
    public function registerLogout()
    {
        // Cadastra na tabela accesses um registro com as informações atualizada de saída do usuário logado
        return $this->accesses()->update([
            'user_id'   => $this->id,
            'datetime2'  => date('His'),
        ]);
    }

    public function registerTimer()
    {

        return $this->datetime->diff($this->datetime2);
    }
    
}