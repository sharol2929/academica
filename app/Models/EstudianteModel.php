<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteModel extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'codestudiante';
    public $timestamps = true;
}
