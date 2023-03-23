<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function carts()
    {
        $data['carts'] = Cart::with('products')->get();

        return view('product/carts', $data);
    }

    public function shiftdata()
    {
        $data = Product::get();
        foreach ($data as $datas => $value) {
            Cart::create([
                'name' => $value->name,
                'price' => $value->price,
            ]);
        }
        return redirect('/carts');
    }

    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect('/carts');
    }
}
