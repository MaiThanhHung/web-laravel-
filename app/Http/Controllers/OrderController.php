<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\OrderDetails;
use App\Models\Order;
use App\Models\Shipping;
class OrderController extends Controller
{

public function view_order($order_id){
    $order_details = OrderDetails::where('order_id',$order_id)->get();
    $order = Order::where('order_id',$order_id)->get();
    foreach($order as $key => $ord){
        $customer_id = $ord->customer_id;
        $shipping_id = $ord->shipping_id;
    }
    $customer = Customer::where('customer_id',$customer_id)->first();
    $shipping = Shipping::where('shipping_id',$shipping_id)->first();

    $order_details_product = OrderDetails::with('product')->where('order_id', $order_id)->get();

    
    
    return view('admin.view_order')->with(compact('order','customer','shipping','order_details'));

}
public function manage_order(){
    $order = Order::orderby('created_at','DESC')->get();
  return view('admin.manage_order')->with(compact('order'));
}
}
