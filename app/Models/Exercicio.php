<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descricao',
        'contraindicacao',
        'slug'
    ];

    public function treino()
    {
        return $this->belongsToMany( Treino::class );
    }



}
