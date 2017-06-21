<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $primaryKey = 'CODIGO';

    protected $table = "estados";

    protected $fillable = ['PAIS','SIGLA','NOME'];

    public $timestamps = false;

    public function cidades()
    {
        return $this->hasMany(Cidade::class,'ID_ESTADO','CODIGO');
    }
}
