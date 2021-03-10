<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    //
    protected $fillable = [
        'name', 'color',
    ];
    public function placed_order(){
        return $this->belongsTo('App\placed_order');
    }
}
