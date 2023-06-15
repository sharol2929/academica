<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultadModel extends Model
{
    protected $table = 'facultades';
    protected $primaryKey = 'codFacultad';
    public $timestamps = true;
}
