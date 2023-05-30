<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'user_id',
        'idade',
        'especie',
        'raca',
        'porte',
        'sexo',
        'descricao'

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
