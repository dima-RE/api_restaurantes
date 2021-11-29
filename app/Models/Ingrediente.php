<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingrediente extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'ingredientes';
    public $timestamps = false;

    public function plato(){
        return $this->belongsTo(Plato::class);
    }

}