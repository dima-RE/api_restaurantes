<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Chef extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'chefs';
    public $timestamps = false;
    protected $primaryKey = 'rut';
    protected $incrementing = false;
    protected $keyType = 'string';

    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }

    public function platos(){
        return $this->hasMany(Plato::class);
    }
}
