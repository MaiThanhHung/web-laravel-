<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
class CheckoutController extends Controller
{
    public function login(Request $request){
        

    	return view('pages.login');
    }
    public function show_regis(){
        return view('pages.regis');
    }
    public function add_customer(Request $request){
        $request->validate([
            //validation laravel 
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],[
            'name.required' =>'Vui lòng nhập họ tên',
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'email.required'=>'Vui lòng nhập email',
            'password.required'=>'Vui lòng nhập mật khẩu',
        ]);
        $customer_email= $request->email;
    	$data = array();
    	$data['customer_name'] = $request->name;
    	$data['customer_phone'] = $request->phone;
    	$data['customer_email'] = $request->email;
    	$data['customer_password'] = md5($request->password);
        $result = DB::table('customer')->where('customer_email',$customer_email)->first();
        if($result){
            return redirect()->back();
        }else{
            $customer_id = DB::table('customer')->insert($data);
    	    return Redirect::to('/login');
        }
    	


    }
    public function login_customer(Request $request){
    	$email = $request->email;
    	$password = md5($request->password);
    	$result = DB::table('customer')->where('customer_email',$email)->where('customer_password',$password)->first();
    	
    	
    	if($result){
    		Session::put('customer_id',$result);
    		return Redirect::to('/checkout');
    	}else{
    		return redirect()->back();
    	}
    	
   
    	

    }
    public function checkout(Request $request){
        

       $cate_product = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
        
       
       return view('pages.checkout.show_checkout')->with('category',$cate_product);
   }
    public function save_checkout_customer(Request $request){
        $data = $request->validate([
            //validation laravel 
            'shipping_name' => 'required',
            'shipping_phone' => 'required',
            'shipping_email' => 'required',
            'shipping_address' => 'required',
        ]);
    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['shipping_phone'] = $request->shipping_phone;
    	$data['shipping_email'] = $request->shipping_email;
    	
    	$data['shipping_address'] = $request->shipping_address;

    	$shipping_id = DB::table('shipping')->insertGetId($data);

    	Session::put('shipping_id',$shipping_id);
    	
    	return Redirect::to('/payment');
    }
    public function payment(Request $request){
        
        $cate_product = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
         
        return view('pages.checkout.payment')->with('category',$cate_product);

    }
    public function order_place(Request $request){
        //insert payment_method
        //seo 
        $meta_desc = "Đăng nhập thanh toán"; 
        $meta_keywords = "Đăng nhập thanh toán";
        $meta_title = "Đăng nhập thanh toán";
        $url_canonical = $request->url();
        //--seo 
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 1;
        $payment_id = DB::table('payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id')->customer_id;
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Session::get('cart')->totalPrice;
        $order_data['order_status'] = 0;
        $order_data['created_at']=date('Y-m-d H:i:s') ;
        $order_id = DB::table('order')->insertGetId($order_data);

        //insert order_details
        $cart = Session::get('cart');
        foreach($cart->items as $key => $value){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $key;
            $order_d_data['product_name'] = $value['item']->product_name;
            $order_d_data['product_price'] = $value['price'];
            $order_d_data['product_sales_quantity'] = $value['qty'];
            DB::table('order_details')->insert($order_d_data);
        }
        if($data['payment_method']==1){

            echo 'Thanh toán thẻ ATM';

        }elseif($data['payment_method']==2){
            Session::forget('cart');

            $cate_product = DB::table('category')->where('category_status','0')->orderby('category_id','desc')->get();
           
            return view('pages.checkout.handcash')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

        }else{
            echo 'Thẻ ghi nợ';

        }
        
        //return Redirect::to('/payment');
    }
    public function logout(){
    	Session::flush();
    	return Redirect::to('/');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function view_order($orderId){
        $this->AuthLogin();
        $order_by_id = DB::table('order')
        ->join('customer','order.customer_id','=','customer.customer_id')
        ->join('shipping','order.shipping_id','=','shipping.shipping_id')
        ->join('order_details','order.order_id','=','order_details.order_id')
        ->select('order.*','customer.*','shipping.*','order_details.*')->first();

        $manager_order_by_id  = view('admin.view_order')->with('order_by_id',$order_by_id);
        return view('admin_layout')->with('admin.view_order', $manager_order_by_id);
        
    }
    public function manage_order(){
        
        $this->AuthLogin();
        $all_order = DB::table('order')
        ->join('customer','order.customer_id','=','customer.customer_id')
        ->select('order.*','customer.customer_name')
        ->orderby('order.order_id','desc')->get();
        $manager_order  = view('admin.manage_order')->with('all_order',$all_order);
        return view('admin_layout')->with('admin.manage_order', $manager_order);
    }
}