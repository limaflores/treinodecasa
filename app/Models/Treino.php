<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function alunos(){
=======

    protected $fillable = [
        'objetivo',
        'descricao',
        'numerotreino',
        'nometreino',
        'slug'
    ];


    public function aluno(){
>>>>>>> criar_users-2
        return $this->belongsTo(Aluno::class);
    }

}
