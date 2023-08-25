<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Support\Str;
use Livewire\Component;

class CheckoutShow extends Component
{
    public $carts, $totalProductAmount=0;

    public $fullname, $email, $phone,$adderss,$payment_mode=NULL,$payment_id=NULL;

public function rules()
{
    return[
        "fullname" =>'required|string|min:5',
        "email"  =>'required|email|max:121',
        "phone"=>'required|string|max:11|min:10',
        //  "order_created_at"=>'required|date',
        "adderss" =>'required|string|min:30',

    ];

}
public function placeOrder()
{

    $this->validate();
    $order=Order::create([
        'user_id' =>auth()->user()->id,
        'tracking_no' =>'salsbil' .Str::random(10),
        'fullname'=>$this->fullname,
        'email'=>$this->email,
        'phone'=>$this->phone,
        // 'order_created_at' => $this->order_created_at,
        'adderss' => $this->adderss,
        'status_message'=>'inprogress',
        'payment_mode'=>$this->payment_mode,
        'payment_id'=>$this->payment_id,
    ]);
    foreach ($this->carts as $cartItem) {

        $orderItems = Orderitem::create([
            'order_id'=>$order->id,
            'product_id'=>$cartItem->product_id,
            'quantity'=>$cartItem->quantity,
            'price'=>$cartItem->product->selling_price,
        ]);
        // if($cartItem->product){

        // }else{

        // }
    }

      return   $order;

    }
    public function codOrder()
    {
        $this->payment_mode ='Cash on Delivery';
        $codOrder= $this->placeOrder();

    if($codOrder)
    {
        Cart::where('user_id',auth()->user()->id)->delete();
        $this->dispatchBrowserEvent('message', [
            'text' => 'Order Placed Successfully',
            'type' => 'success',
            'status' => 200
        ]);
        return redirect()->to('thank-you');
    }
    else
    {
        $this->dispatchBrowserEvent('message', [
            'text' => 'something went wrong',
            'type' => 'error',
            'status' => 500
        ]);
    }


}



    public function totalProductAmount()
    {
        $this->totalProductAmount = 0;
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();
        foreach ($this->carts as $cartItem) {
            $this->totalProductAmount += $cartItem->product->selling_price * $cartItem->quantity;
        }

        return $this->totalProductAmount;
    }

    public function render()
    {
        $this->fullname =auth()->user()->name;
        $this->email =auth()->user()->email;
        $this->totalProductAmount = $this->totalProductAmount();
        return view('livewire.frontend.checkout.checkout-show', [
            'totalProductAmount' => $this->totalProductAmount
        ]);
    }
}

