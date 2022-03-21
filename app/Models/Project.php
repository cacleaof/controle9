<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Diario;
use App\Models\User;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['proj_id', 'projeto', 'proj_detalhe', 'duracao', 'gerente', 'urg', 'imp'];

    public function user()
    {
        return $this->belongsTo(User::class, 'gerente');
    }
	
	 public function project()
    {
    	return $this->belongsTo(Project::class);
    }
    public function diarios()
    {
        return $this->hasMany(Diario::class, 'proj_id');
    }
}
