<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaModel extends Model
{
    protected $table = 'programas';
    protected $primaryKey = 'codPrograma';
    public $timestamps = true;
}
