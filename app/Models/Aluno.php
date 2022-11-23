<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    // public function professor(){
    //     return $this->belongsTo(Professor::class);
    // }

    // public function treino(){
    //     return $this->hasMany(Treino::class);
    // }



    protected $fillable = [
        'nome_aluno',
        'data_nascimento',
        'email',
        'objetivo',
        'frequencia',
        'descricao',
        'nivel_treinamento',
        'observacoes',
        'lesoes',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo( User::class );
    }

    public function treinos()
    {
        return $this->hasMany( Treino::class, 'id'  );
    }

    public function aluno()
    {
        return $this->hasMany( Aluno::class, 'id'  );
    }


}
