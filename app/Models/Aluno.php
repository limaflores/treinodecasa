<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function professores(){
        return $this->belongsTo(Professor::class);
    }

    public function treinos(){
        return $this->hasMany(Treino::class);
    }


}
