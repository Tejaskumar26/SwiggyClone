<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Contact;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $details = Food::all();
        return view('detail', ['details' => $details]);
    }
    public function search(Request $request)
    {
        $data = Food::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('search', ['data' => $data]);
    }
    public function details($id)
    {
        $data = Food::find($id);
        return $data;
        // return view('detail',['data'=>$data]);
    }
    public function addToCart(Request $request)
    {
        if (Auth::user()->id != 0) {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->food_id = $request->food_id;
            $cart->save();
            return redirect('dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function cart()
    {
        $userId = Auth::user()->id;
        $products = DB::table('carts')
            ->join('foods', 'carts.food_id', '=', 'foods.id')
            ->where('carts.user_id', $userId)
            ->select('foods.*', 'carts.id as carts_id')
            ->get();
        return view('cart', ['products' => $products]);
    }

    public function removecart($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }

    public function ordernow()
    {
        $userId = Auth::user()->id;
        $total = $foods = DB::table('carts')
            ->join('foods', 'carts.food_id', '=', 'foods.id')
            ->where('carts.user_id', $userId)
            ->select('foods.*', 'carts.id as cart_id')
            ->sum('foods.price');
        return view('orders', ['total' => $total]);
    }

    public function orderPlace(Request $request)
    {
        $userId = Auth::user()->id;
        $allCart = Cart::where('user_id', $userId)->get();
        $request->validate([
            'address' => 'required'
            ]);
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->food_id = $cart['food_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $request->input();
        return view('OrderSuccess');
    }
    public function form()
    {
        $userId = Auth::user()->id;
        $total = DB::table('carts')
            ->join('foods', 'carts.food_id', '=', 'foods.id')
            ->where('carts.user_id', $userId)
            ->select('foods.*', 'carts.id as cart_id')
            ->sum('foods.price');
        return view('form', ['total' => $total]);
    }

    public function contact()
    {
        return view('contact');
    }
    public function contactus(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $help= new Contact();
        $help->name = $request->name;
        $help->email = $request->email;
        $help->subject = $request->subject;
        $help->message = $request->message;
        $help->save();
        return view('thank');
    }
    public function paid()
    {
        return view('paid');
    }
}