<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Webpatser\Uuid\Uuid;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $primarykey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'name', 'email', 'password','image','Gender','Address',
    ];
    // public $primarykey 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->uuid = (string) Uuid::generate(4);
    //     });
    // }
    public static function boot()
    {
         parent::boot();
         self::creating(function($model){
             $model->id = self::generateUuid();
         });
    }
    public static function generateUuid()
    {
         return Uuid::generate();
    }

    public function roleuser(){
        return $this->belongsTo('App\roleuser');
    }
    public function role(){
        return $this->hasOne('App\role','id','role_id');
    }
    public function placed_item(){
        return $this->belongsTo('App\placed_item');
    }
}
