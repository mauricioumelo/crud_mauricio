<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    protected $table='documents';
    protected $fillable=['titulo','nome_arquivo','tipo_id'];
    use HasFactory;

    public function tipo(){
        return $this->hasOne('App\Models\tipoDocument','id','tipo_id');
    }
}
