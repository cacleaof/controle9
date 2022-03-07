<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\User;

class Diario extends Model
{
    protected $fillable =['proj_id', 'user_id', 'projeto', 'ndia'];
    use HasFactory;

    public function diario()
	{
    	return $this->belongsTo(Diario::class);
	}
    public function user()
	{
    	return $this->belongsTo(User::class);
	}
	public function task()
    {
    	return $this->belongsTo(Task::class);
    }
    public function project()
    {
    	return $this->belongsTo(Project::class, 'proj_id');
    }
}
