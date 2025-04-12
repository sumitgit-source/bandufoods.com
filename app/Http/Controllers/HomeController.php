<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Farmer;
use App\Models\Product;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        $recipes = Recipes::all();
        return view ('index', compact('products', 'recipes'));
    }

    public function farmer(Request $request) {
        // return $request;
        $farmer = new Farmer();
        $farmer->name = $request->name;
        $farmer->phone = $request->phone;
        $farmer->address = $request->address;
        $farmer->save();
        return redirect()->back();
        // $farmer->name = $request->name;
    }

    public function customer(Request $request) {
        // return $request;
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->firm = $request->firm;
        $customer->gst = $request->gst;
        $customer->save();
        return redirect()->back();
    }

    public function login () {
        return view('admin.login');
    }

    public function loginCheck (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
