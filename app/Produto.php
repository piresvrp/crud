<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Produto;

class Produto extends Model
{
    // protected $fillable = ['name','description','quantity','price','imagem'];
    // protected $guarded = ['id', 'created_at', 'update_at'];
    // protected $table = ['produtos'];

    protected $fillable = ['name','description','quantity','price','image'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';


    // public function __construct(Clinic $clinic){
    //     $this->clinic = $clinic;
    // }


}
