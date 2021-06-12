<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function getIndex(){
        $products = Products::paginate(5);
        // return view('page.trangchu',['products'=>$products]);
         return view('page.trangchu',compact('products'));
    }  
     public function getChitiet(Request $req){
        $detail = Products::where('id',$req->id)->first();
        return view('page.chitiet',compact('detail'));
    } 
} 