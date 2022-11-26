<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;

    protected $fillable = [
        'objetivo',
        'exercicio',
        'serie',
        'repeticoes',
        'intervalo',
        'slug'
    ];

    public function exercicio()
    {
        return $this->belongsToMany( Exercicio::class );
    }
}
