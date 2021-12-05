<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Session\Session as SessionSession;
use PHPUnit\Framework\Constraint\Count;

session_start();


class CartController extends Controller
{
    public function Addcart( $id){
        $product = Product::find($id);
        if($product!=null){
            $oldCart= Session::has('cart') ? Session::get('cart') : null;
            $newCart=new Cart($oldCart);
            $newCart->add($product,$id);
            Session::put('cart', $newCart);
            
        }
        return view('pages.cart', compact('newCart'));
    }
    public function Addqtycart( Request $request ){
        $quanty= $request->qtybutton;
        $id=$request->id;
        $product = Product::find($id);
        if($product!=null){
            $oldCart= Session::has('cart') ? Session::get('cart') : null;
            $newCart=new Cart($oldCart);
            $newCart->addcart($product,$id,$quanty);
            Session::put('cart', $newCart);
            
        }
        return Redirect::to('/view-cart');
    }
    public function Deleteitemcart( $id){
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $newCart=new Cart($oldCart);
        $newCart->deleteitem($id);
        if(Count($newCart->items)>0){
            Session::put('cart', $newCart);
        }else{
            Session::forget('cart');
        }
        return view('pages.cart', compact('newCart'));
    }
    public function delete_all_product(){
        $cart = Session::get('cart');
        if($cart==true){
            // Session::destroy();
            Session::forget('cart');
            
            return redirect()->back()->with('message','Xóa hết giỏ thành công');
        }
    }
    public function ViewCart(){
        return view('pages.list-cart');
    }
    public function Deleteitemlistcart( $id){
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $newCart=new Cart($oldCart);
        $newCart->deleteitem($id);
        if(Count($newCart->items)>0){
            Session::put('cart', $newCart);
        }else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function Saveitemcart(Request $request){
        $id = $request->rowId_cart;
        $quanty = $request->qtybutton;
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $newCart=new Cart($oldCart);
        $newCart->UpdateItemCart($id,$quanty);
        Session::put('cart', $newCart);
        return redirect()->back();
    }
}
