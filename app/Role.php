<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

   public function users()
   {
       //One to many relationship
       return $this->hasMany('App\User');
   }
}
