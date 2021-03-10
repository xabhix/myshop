<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\user;
use App\item;
use App\Placed_item;
use App\status;
class OrderController extends Controller
{
    //
    public function index(Request $request,$id=null,$item=null){
     
        $item_id=$request->id;
        //dd($item_id);
        if($id||$item){
            return view('orderform',compact('item_id'));  
        }
        return view('orderform',compact('item_id'));
    }

    public function order(Request $request){
          //dd($request->item_id);
         // dd('1');
         $validated = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'Address'=> 'required',
            'payment_mode'=> 'required',
            'postal_code'=> 'required|max:6|integer',
        ]);
          $Placed_item=new Placed_item();
         
          $Placed_item->item_id=$request->item_id;
          $Placed_item->user_id=Auth::user()->id;
          $Placed_item->Address=$request->input('Address');
          $Placed_item->status=1;
          $Placed_item->city=$request->input('city');
          $Placed_item->postal_code=$request->input('postal_code');
          $Placed_item->payment_mode=$request->input('payment_mode');
          $Placed_item->save();
          return redirect('profile');
    }

    public function ShowOrderedItem($user_id){
          //dd($item);
          //$placed_item_id=Placed_item::with('status')->first();
          //dd($placed_item_id->status()->name);
          $placed_item=Placed_item::where('user_id',$user_id)->with('item','placed_status')->get();
          //dd($placed_item);
          return view('showordereditem',compact('placed_item'));
        //   $placed_item_id=Placed_item::where('user_id',$user_id)->select('item_id')->get();
        //   $placed_item_status=Placed_item::where('user_id',$user_id)->select('status')->get();
          
        //   $itemlist=[];
        //   $status=[];
          
        //   foreach($placed_item_status as $placed_item){
        //     $statuslist=status::where('id',$placed_item->status)->first();
        //    //dd($item);
        //    array_push($status,$statuslist);
        //    }
        //    //dd($status);
        //   foreach($placed_item_id as $placed_item){
        //    $item = item::where('id',$placed_item->item_id)->with('category')->first();
        //   //dd($item);
        //   array_push($itemlist,$item);
        //   }
        
        //   return view('showordereditem',compact('itemlist','status'));
    }

    public function orderstatus(){
        $status=status::get();
       // dd('1');
        $itemlist=[];
        $userlist=[];
        $placed_item_id=Placed_item::select('item_id')->get();
        $placed_item_user_id=Placed_item::select('user_id')->get();

        foreach($placed_item_user_id as $placed_item )
        {
        $user=user::where('id',$placed_item->user_id)->first();
        array_push($userlist,$user);
        }
        //dd( $placed_item_user_id);
       //dd(count($userlist));
        //dd($placed_item_id);
        foreach($placed_item_id as $placed_item)
        {
            $item=item::where('id',$placed_item->item_id)->with('category')->first();
            array_push($itemlist,$item);
        }
        //dd($itemlist);
        
        return view('orderstatusform',compact('itemlist','status','userlist'));
    }
    public function StatusOfOrder(Request $request){
        //dd($request->status);
        $placed_item=placed_item::where('item_id',$request->item_id)->first();
        if($placed_item)
        {
        $placed_item->status=$request->status;
        $placed_item->save();
        }
        return redirect()->back()->with('message','order status has been changed');   
    }

    public function cartitems(){
        $myItem = '';
        // $cart_items = '<script>document.write(localStorage.getItem("items"))</script>';
        if(isset($_COOKIE['cookieName'])) {
            $myItem = $_COOKIE['cookieName'];
            }
            dd($cart_items);
        $myArray=str_replace($myItem[0]," ",$myItem);
        $myString=str_replace($myArray[strlen($myArray)-1]," ",$myArray);

       
        $myNewArray=explode(",",$myString);
        //dd($myNewArray);
        $cartItems=[];
        //dd($myNewArray);
        foreach($myNewArray as $myNew){
            $item=item::with('category')->where('id',$myNew)->first();
            array_push($cartItems,$item);
        }
        //dd($cartItems);
        return view('showaddcart',compact('cartItems'));
    }
}
