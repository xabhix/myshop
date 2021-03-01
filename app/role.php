<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $fillable = [
        'role',
    ];
    public function roleuser(){
        return $this->belongsTo('App\roleuser');
    }
}
