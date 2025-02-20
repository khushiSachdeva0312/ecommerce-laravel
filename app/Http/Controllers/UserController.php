<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
        
    public function dashboard(){
        $data=auth()->user();
        $item=Product::where('added_by',$data->id)->get();
        // dd($item);
        return view('admin',compact('data','item'));
    }
    public function adminLoggedIn(){

        return view('addUser',['role'=>'Service Provider']);
    }
    public function viewProvider(){
        $data=auth()->user();
        $data=User::where('parent_id',$data->id)->get();
        return view('view',compact('data'));
    }

    public function registerUser(Request $request, User $user){
            
        $id=auth()->id();
        
        $user->create([
            'parent_id'=>$id,
            'name'=>$request->name,
            'email'=>$request->email,
            'email_verified_at'=>now(),
            'password'=>$request->password,
            'role'=>'Service Provider',
        ]); 
        return redirect()->back();
    }

    public function addItem(){
        // dd($request);
        return view('additem');
    }

    public function registerItem(Request $request,Product $product){

        $id=auth()->id();
        // dd($request->Product_group);
        if($request->current_prize>=$request->sale_prize)
        {
            if($request->file!=null){

                $path = Storage::disk('public')->put('images', $request->file);
                $product->create([
                    'added_by'=>$id,
                    'title'=>$request->title,
                    'image_path'=>$path,
                    'description'=>$request->discription,
                    'current_price'=>$request->current_prize,
                    'selling_price'=>$request->sale_prize,
                    'group'=>$request->product_group,
                ]); 
            }
            // dd($path);

            
            return redirect()->route('dashboard');
        }
        return 'current prize is less then the  sale prize';

    }

}
