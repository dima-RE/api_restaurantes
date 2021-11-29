<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Restaurante extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'restaurantes';
    public $timestamps = false;
    protected $primaryKey = 'rut';
    protected $incrementing = false;
    protected $keyType = 'string';

    //retorna los chefs asociados a un restaurante
    public function chefs(){
        return $this->hasMany(Chef::class);
    }
}
