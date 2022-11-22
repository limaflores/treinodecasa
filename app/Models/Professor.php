<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = "professores"; //resolve o problema do S inserido pelo laravel

    public function user(){

        return $this->belongsTo(User::class);
    }


    public function alunos(){
        return $this->hasMany(Aluno::class);
    }
}
