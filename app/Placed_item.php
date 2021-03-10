<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placed_item extends Model
{
    //
    protected $fillable = [
        'item_id', 'Address', 'user_id','city','postal_code','status','payment_mode',
    ];
    public function placed_status(){
        return $this->hasOne('App\status','id','status');
    }
    public function item(){
        return $this->hasOne('App\item','id','item_id');
    }
    public function user(){
        return $this->hasOne('App\user','id','user_id');
    }
}
