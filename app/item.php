<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //
    protected $fillable = [
        'item', 'category_id', 'price','image','owner','is_active',
    ];
    public function category(){
        return $this->hasOne('App\category','id','category_id');
    }

}
