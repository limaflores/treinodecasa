<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;


    protected $fillable = [
        'objetivo',
        'descricao',
        'numerotreino',
        'nometreino',
        'slug'
    ];


    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }

}
