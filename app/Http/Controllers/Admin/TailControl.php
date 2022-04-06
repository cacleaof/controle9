<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consult;
use App\Models\User;
use App\Models\Perfil;
use App\Models\Registro;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TailControl extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
}
