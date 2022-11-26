<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'nome',
        'data_nascimento',
        'email',
        'objetivo',
        'frequencia',
        'lesao',
        'observacao',
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
