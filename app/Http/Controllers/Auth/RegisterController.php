<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\roleuser;
use App\role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['required','image','mimes:jpg,jpeg'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Gender'=>['required','string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

          // using relations here
        
          // end the above section
              

        $request = request();
        
        $imageName=time().'.'.$data['image']->extension();
        $data['image']=$request->image->move(public_path('image'),$imageName);
        
        if($request->role=='super Admin'){
            $role=Role::where('role',$request->role)->first();
            $role_id= $role->id;
            
        }else if($request->role=='Admin'){
            $role=Role::where('role',$request->role)->first();
            $role_id=$role->id;
        }else{
            $role_id=1;
        }
        
        
        // 
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Gender'=>$data['Gender'],
            'Address'=>$data['Address'],
            
            'image'=>$imageName,
        ]);
        Roleuser::create([
            'user_id'=>$user->id,
            
           'role_id' => $role_id,
        ]);
        $user_id=$user->id;
        //dd($use);
        $user_role_Id = Roleuser::where('user_id',$user_id)->first()->role_id;
        User::where('id',$user_id)->update(['role_id'=>$user_role_Id]);
        //dd($userId);
       
        return $user;

    
    }
}