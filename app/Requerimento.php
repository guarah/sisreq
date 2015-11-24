<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requerimento extends Model {

    protected $primaryKey = 'id_requerimento';

    protected $fillable=[
        'nome',
        'id_aluno',
        'tipo',
        'observacao'
    ];

}
