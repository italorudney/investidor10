<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public $table = 'categorias';

    protected $primaryKey = 'id';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';

    //protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'descricao'
    ];

}
