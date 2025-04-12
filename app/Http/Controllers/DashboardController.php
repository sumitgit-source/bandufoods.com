<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Farmer;
use App\Models\Product;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Check if the user is authenticated and is an admin
        
    }

    public function index()
    {
        if (!Auth::check() || Auth::user()->type != 'admin') {
            abort(403, 'Unauthorized access');
        }
        $products = Product::all();
        $recipies = Recipes::all();
        $farmers = Farmer::all();
        $customers = Customer::all();
        return view('admin.index', compact('products', 'recipies', 'farmers' , 'customers'));
    }

    public function blank()
    {
        return view('admin.blank');
    }

    public function viewPage($pagename)
    {
        if (!Auth::check() || Auth::user()->type != 'admin') {
            abort(403, 'Unauthorized access');
        }
        $products = Product::all();
        $recipies = Recipes::all();
        $farmers = Farmer::all();
        $customers = Customer::all();
        return view('admin.' . $pagename, compact('products', 'recipies', 'farmers' , 'customers'));
    }


    public function saveProduct(Request $request)
    {
        if (!Auth::check() || Auth::user()->type != 'admin') {
            abort(403, 'Unauthorized access');
        }
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'info' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:15048',
            'status' => 'nullable|string',
            'contact' => 'nullable|string',
        ]);

        // Create a new product record
        $product = new Product();
        $product->title = $request->title;
        $product->info = $request->info;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }
        $product->status = $request->status;
        $product->contact = $request->contact;
        $product->save();
        return redirect()->back();
    }

    public function saveRecipes(Request $request)
    {
        if (!Auth::check() || Auth::user()->type != 'admin') {
            abort(403, 'Unauthorized access');
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'info' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:15048',
            'status' => 'nullable|string',
            'contact' => 'nullable|string',
        ]);

        // Create a new product record
        $recipies = new Recipes();
        $recipies->title = $request->title;
        $recipies->info = $request->info;
        $recipies->description = $request->description;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $recipies->image = $imagePath;
        }
        $recipies->status = $request->status;
        $recipies->contact = $request->contact;
        $recipies->save();
        return redirect()->back();
    }

    public function editProduct(Product $product)
    {
        if (!Auth::check() || Auth::user()->type != 'admin') {
            abort(403, 'Unauthorized access');
        }
        return view('admin.edit-product', compact('product'));
        // return $product;
    }

    public function editRecipes($id) {
        $recipe =  Recipes::find($id);
        return view ('admin.edit-recipes', compact('recipe'));
    }

    public function updateProduct(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'info' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:15048',
            'status' => 'nullable|string',
            'contact' => 'nullable|string',
        ]);

        // Create a new product record
        // $product = new Product();
        $product->title = $request->title;
        $product->info = $request->info;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }
        $product->status = $request->status;
        $product->contact = $request->contact;
        $product->save();
        return redirect()->back();
    }

    public function updateRecipe(Request $request, Recipes $recipe)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'info' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:15048',
            'status' => 'nullable|string',
            'contact' => 'nullable|string',
        ]);

        // Create a new product record
        // $product = new Product();
        $recipe->title = $request->title;
        $recipe->info = $request->info;
        $recipe->description = $request->description;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $recipe->image = $imagePath;
        }
        $recipe->status = $request->status;
        $recipe->contact = $request->contact;
        $recipe->save();
        return redirect()->back();
    }
}
