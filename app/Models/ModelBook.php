<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'book';

    public function relUsers()
    {
    	 return $this->hasOne('App\User','id', 'id_user');
    }

    protected $fillable=['title','id_user','pages','price'];

}
