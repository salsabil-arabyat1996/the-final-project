<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;

class CartShow extends Component
{
    public $cart, $totalPrice= 0;
    public function decrementQuantity(int $cartId )
    {
        $cartData =Cart::where('id',$cartId)->where('user_id',auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->product->quantity > $cartData->quantity )
            {
                $cartData->decrement('quantity');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Quantity Updated',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
            else{
                $this->dispatchBrowserEvent('message', [
                    'text' => 'only' .$cartData->product->quantity.'Quantity availabel',
                    'type' => 'success',
                    'status' => 200
                ]);
            }


        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'something went wrong!',
                'type' => 'error',
                'status' =>404
            ]);
        }
    }


    public function removeCartItem(int $cartId)
    {
        // Find the cart item belonging to the authenticated user with the given cartId
        $cartRemoveData = Cart::where('user_id', auth()->user()->id)
                              ->where('id', $cartId)
                              ->first();

        // Check if the cart item was found
        if ($cartRemoveData) {
            // Delete the cart item
            $cartRemoveData->delete();

            // Emit a Livewire event named 'CartAddedUpdated'
            $this->emit('CartAddedUpdated');

            // Dispatch a browser event named 'message' with success details
            $this->dispatchBrowserEvent('message', [
                'text' => 'cart item removed successfully',
                'type' => 'success',
                'status' => 200
            ]);
        } else {
            // If cart item not found, dispatch a browser event with error details
            $this->dispatchBrowserEvent('message', [
                'text' => 'something went wrong!',
                'type' => 'error',
                'status' => 500
            ]);
        }
    }


    public function incecrementQuantity(int $cartId )
    {
        $cartData =Cart::where('id',$cartId)->where('user_id',auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->product->quantity > $cartData->quantity )
            {
                $cartData->increment('quantity');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Quantity Updated',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
            else{
                $this->dispatchBrowserEvent('message', [
                    'text' => 'only' .$cartData->product->quantity.'Quantity availabel',
                    'type' => 'success',
                    'status' => 200
                ]);
            }


        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'something went wrong!',
                'type' => 'error',
                'status' =>404
            ]);
        }



    }
    public function render()

    {
        $this->cart = Cart::where('user_id',auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show',[
            'cart'=> $this->cart
        ]);
    }
}
