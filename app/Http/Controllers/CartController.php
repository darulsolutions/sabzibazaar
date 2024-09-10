<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function addToCart(Request $request)
    // {
    //     $quantity = $request->input('quantity__number');
    //     $productId = $request->input('product_id');

    //     if ($quantity >= 1) {
    //         return redirect()->route('cart');           
    //     }

    //     return redirect()->back()->withErrors('Invalid quantity.');
    // }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $title = $request->input('title');
        $price = $request->input('price');
        $imgSrc = $request->input('img');
        $quantity = $request->input('quantity__number'); 

        $cart = session()->get('cart', []);

        if($quantity >= 1){
            $cart[$productId] = [
                'quantity' => $quantity,
                'title' => $title,
                'price' => $price,
                'image' => $imgSrc,
            ];
        }


        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }


    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }
}
