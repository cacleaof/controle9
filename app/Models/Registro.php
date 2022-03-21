<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = ['data', 'acao', 'nome', 'user_id', 'cpf_p', 'nome_p'];
    protected $appends = ["open"];
    use HasFactory;
    Public function getOpenAttribute(){
        return true;
        }
}
