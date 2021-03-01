<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roleuser extends Model
{
    //
    protected $fillable = [
        'role_id','user_id',
    ];
    public function role(){
        return $this->hasOne('App\role','id','role_id');
    }
    public function user(){
        return $this->hasOne('App\user','id','user_id');
    }
}
