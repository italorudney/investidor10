<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    public $table = 'noticias';

    protected $primaryKey = 'id';
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';

    //protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'noticia',
        'titulo',
        'subTitulo',
        'cat_id'
    ];

    public static $rules = [
         'noticia' => 'required',
         'titulo' => 'required',
         'subTitulo' => 'required',
         'cat_id' => 'required',
    ];
 

    public function categoria()
    {
        return $this->hasOne('App\Models\Categorias','id','cat_id');
    }  

}
