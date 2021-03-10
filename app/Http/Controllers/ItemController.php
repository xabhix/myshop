<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CategoryController;

use Illuminate\Http\Request;
use App\category;
use App\item;
use App\placed_item;
use Auth;

class ItemController extends Controller
{

        
    public function index(Request $request,$itemstatus=null,$price=null,$catgory=null){
        $category=category::get();
        //$path=$request->url();
        
        $itemstatus=$request->itemstatus;
        $price=$request->price;
        $catgory=$request->category;
        // if($path==url('http://localhost/cartitem/{id}/{item}')){
        //     dd('1');
        //     $item=item::with('category')->get();
        //     return view('showitem',compact('item','category'));
        // }
        
        //dd($itemstatus);
//---------------------------------------- filter apply here---------------------------------------------------
        if($itemstatus || $price || $catgory){
            //dd($catgory);
           if($itemstatus!=0&&$price==0&&$catgory==0){
            //dd('item');
            $item=item::with('category')
                        ->when($itemstatus==1,function($query){
                            return $query->orderBy('created_at','desc');
                        })
                        ->when($itemstatus==2,function($query){
                            return $query->orderBy('created_at');
                        })
                        ->take(10)
                        ->get();
                return view('showitem',compact('item','category'));
            }

           if($itemstatus==0&&$price!=0&&$catgory==0){
               //dd('price');
            $item=item::with('category')
                        ->when($price==2,function($query){
                            return $query->orderBy('price','DESC');
                        })
                        ->when($price==1,function($query){
                            return $query->orderBy('price');
                        })
                        ->get();
            return view('showitem',compact('item','category'));
           }

           if($itemstatus==0&&$price==0&&$catgory!=0){
            
            $item=item::with('category')->where('category_id',$catgory)->get();
            return view('showitem',compact('item','category'));
           }
          
          if($itemstatus!=0&&$price!=0&&$catgory!=0) {
              
                  //dd('atibhavan');
                  $item=item::with('category')
                              ->where('category_id',$catgory)
                              ->when($price==2,function($query){
                                  return $query->orderBy('price','DESC');
                              })
                              ->when($price==1,function($query){
                                return $query->orderBy('price');
                              })
                              ->when($itemstatus==1,function($query){
                                return $query->orderBy('created_at','DESC');
                              })
                              ->when($itemstatus==2,function($query){
                                return $query->orderBy('created_at');
                              })
                              
                              ->get();
                return view('showitem',compact('item','category'));            
                            
              }
              else{
                  
                    $item=item::with('category')
                                ->when($catgory,function($query,$catgory){
                                    return $query->where('category_id',$catgory);
                                  })
                                ->when($price==2,function($query){
                                    return $query->orderBy('price','DESC');
                                })
                                ->when($price==1,function($query){
                                  return $query->orderBy('price');
                                })
                                ->when($itemstatus==1,function($query){
                                  return $query->orderBy('created_at','DESC');
                                })
                                ->when($itemstatus==2,function($query){
                                  return $query->orderBy('created_at');
                                })
                                
                                ->get();
                        return view('showitem',compact('item','category'));
              }
        



           
        }else{
            //dd('3');
            $item=item::with('category')->get();
        };

//--------------------------------------filter end here--------------------------------------------------------------------------   
        $placed_item=placed_item::with('user','item')->get();
        //dd($placed_item);
        //dd($placed_item);
        $item=item::with('category')->get();
        
        
        return view('showitem',compact('item','category','placed_item'));
    }
    //


   public function addcart($id){
       $cart=item::where('id',$id)->with('category')->first();
      //dd($cart);
       return view('oneitem',compact('cart'));
   } 




    public function edititemform(){
        return view('edititemform');
    }
    Public function itemtable(){
        
        $userId=Auth::user()->id;
        //dd($userId);
        $item=item::where('owner',$userId)->get();
        //dd($item);
        //dd($item);
        return view('itemtable',compact('item'));
    }
    public function itemform(){
        $category = category::all();
        return view('itemform',compact('category'));
    }







    public function itemadd(Request $request){
        $item = new item();
        $item->item = $request->input('item');
        $item->price = $request->input('price');
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->extension();
            
            $image=$request->image->move(public_path('image'),$imageName);
            $item->image=$imageName;
        }else {
            $item->image="NA";
        }
        //$item->catgory_id=$request->input('catgory');
        $userId=Auth::user()->id;
        $item->owner=$userId; 
        $category=category::where('name',$request->category)->first();
        
        $item->category_id=$category->id;
       
        $item->is_active=1;
      
        $item->save();
    //    $items=item::where('item',$item->item)->first();
    //    dd($items);
    //    $items=$request->session()->put('item',$item);
    //    dd($items);
    //return redirect()->back();
    $item=item::all();
    $request->session()->put('item',$item);
    return redirect('profile/itemtable');   
    }

    function edit_item($id){
        $item=item::find($id);
        //dd($item);
        $category=category::get();
        //dd($category);
        return view('edititemform',compact('item','category'));
    }
    
    public function updateitem(Request $request){
        $item=item::find($request->id);
        //dd($item);

        $item->item = $request->item;
        $item->price = $request->price;
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->extension();
            
            $image=$request->image->move(public_path('image'),$imageName);
            $item->image=$imageName;
        }else {
            $item->image="NA";
        }
        //$item->catgory_id=$request->input('catgory');
        // $userId=Auth::user()->id;
        // $item->owner=$userId; 
        $category=category::where('name',$request->category)->first();
        
        $item->category_id=$category->id;
       
        
        $item->save();

        return redirect('profile/itemtable');
      
    }
    public function deleteitem($id){
           $item=item::find($id);
           $item->delete();
           return redirect('profile/itemtable');
    }

    // public function showitem(Request $request){
    //     //$category = category::all();
    //     dd('test');
    //     $item=item::select('*')->with('category')->get();
    //     //dd($item);
    //     return view('showitem',compact('item'));
    //     //['item'=>$item]
    // }


    // public function FilterLatest(Request $request){
    //   // dd('1');
    //    $item=item::orderBy('created_at','DESC')->take(10)->get();
    //    //$recentitem=$request->query('item','latest');
    //   // $itemsorted=$item->sortBy('created_at');
    //   return view('latestitem',compact('item'));
    //   //return view('latestitem')
    //    //dd($item);
    // }


}
