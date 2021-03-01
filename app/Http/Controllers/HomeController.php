<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $user = Auth::user();
        //dd($user);
        return view('profile',compact('user'));
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
                $input=$request->input();
                $input['id']=$user_id;
                $user=$userstatus->update($input);
            //$user=User::find($request->id);

            // $request = request();
        
            // $imageName=time().'.'.$user['image']->extension();
            // $user['image']=$request->image->move(public_path('image'),$imageName);
        
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
        
        $user=User::where('id',$id)->first();
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

