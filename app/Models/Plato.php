<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plato extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'platos';
    public $timestamps = false;

    public function chef(){
        return $this->belongsTo(Chef::class);
    }
    
}
