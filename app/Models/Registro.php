<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    public $primaryKey = "CODIGO";

    protected $fillable = ['MODALIDADE'];

    protected $table = "FIEJORNALISMO";

    public $timestamps = false;

}
