<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

    public function __construct($oldCart)
    {
    	if($oldCart){
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item, $id)
    {
    	$storedItem = ['qty'=>0, 'price'=>$item->product_price, 'item'=>$item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$storedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qty']++;
    	$storedItem['price'] = $item->product_price * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty++;
    	$this->totalPrice += $item->product_price;
    }
    public function deleteitem($id){
        $this->totalQty -= $this->items[$id]['qty'];
    	$this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
	public function UpdateItemCart($id, $quanty){
		$this->totalQty -= $this->items[$id]['qty'];
    	$this->totalPrice -= $this->items[$id]['price'];

		$this->items[$id]['qty'] = $quanty;
		$this->items[$id]['price'] = $quanty * $this->items[$id]['item']->product_price;

		$this->totalQty += $this->items[$id]['qty'];
    	$this->totalPrice += $this->items[$id]['price'];
	}
	public function addcart($item, $id ,$quanty)
    {
    	$storedItem = ['qty'=>0, 'price'=>$item->product_price, 'item'=>$item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$storedItem = $this->items[$id];
    		}
    	}
		
    	$storedItem['qty']=$quanty;
    	$storedItem['price'] = $item->product_price * $quanty;
    	$this->items[$id] = $storedItem;
    	$this->totalQty+= $this->items[$id]['qty'];
    	$this->totalPrice += $this->items[$id]['price'];
    }
	
}