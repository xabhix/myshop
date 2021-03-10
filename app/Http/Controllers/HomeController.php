<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\role;
use App\roleuser;
use App\item;
use App\category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    


    
    public function index()
    {
        return view('home');
    }
    public function profile(){
        
         //$user=User::with('roleuserRole')->first();
        // //with('role_roleuser')->
         //dd($user);
        $user = Auth::user()->with('role')->get();
        //dd($user);
        $roleuser=roleuser::where('user_id',Auth::user()->id)->first();
         //dd($roleuser);
        $role=role::where('id',$roleuser->role_id)->first();
         //dd($role->role);
        $user = Auth::user();
        
        //dd($user);
        return view('profile',compact('user','role'));
    }
    public function update(Request $request){
        $user_id = Auth::user()->id;
        $userstatus = User::find($user_id);
        // $input=$request->input();
        // $input['id']=$user_id;
        // $user=$userstatus->update($input);
        //dd($user_id);
         switch($request->input('action')){
             case 'update':
                // $input=$request->input();
                // $input['id']=Auth::user()->id;
                // $user=$userstatus->update($input);
            //$user=User::find($request->id);
            $user=User::find($request->id);
            //dd($user); 
            // $request = request();
            if($request->hasFile('image')){
            $imageName=time().'.'.request()->file('image')->extension();
            $request->image->move(public_path('image'),$imageName);
            
            }
            
            $user->name=$request->name;
            $user->email=$request->email;
            $user->Address=$request->Address;
            $user->Gender=$request->Gender;
            $user->image=$imageName;
            $user->update();
            // User::create([
            //     'name' => $user['name'],
            //     'email' => $user['email'],
                
            //     'Gender'=>$user['Gender'],
            //     'Address'=>$user['Address'],
                
            //     'image'=>$imageName,
            //  ]);
            // dd('1');
            return redirect('profile');
            break;
            case 'cancel':
        //     $user=Auth::user();
            return redirect('profile');
             break;   
           }

        // return view('update');
    }
    
    public function edit($id){
        
        // $user=User::where('id',Auth::user()->id)->first();
        $user = Auth::user();
        //dd($user);
         if(Auth::user()){
            return view('update',compact('user'));
        }else{
            return redirect()->back();
         }
        //dd($user);
        //return view('update',compact('user'));
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }

    
}

