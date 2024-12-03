<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    // Apply middleware to all methods within this controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Example method for the profile page

    public function index()
    {
        //$user = Auth::user();
        
        return view('profile', ['products'=>Product::latest()->paginate(3)]);//compact('user');
    }

    // Example method for creating a product

    public function create()
    {
        $user = Auth::user();
        
        return view('create', compact('user'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        //validate data

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        // upload image

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('products',$imageName);
        //dd($imageName);

        $product = new Product();

        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;  
        
        $product->save();


        return back()->withSuccess('product created !!');
     
    }


    public function edit($id){
        //dd($id);
        $product = Product::where('id',$id)->first();
        return view('edit', ['product'=>$product]);

    }


    public function update(Request $request, $id){
        //dd($request->all());
        //dd($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        
        $product = Product::where('id',$id)->first();

        if(isset($request->image)){

            $imageName = time().'.'.$request->image->extension();
            $request->image->move('products',$imageName);
            $product->image = $imageName;

        }

        $product->name = $request->name;
        $product->description = $request->description;  
        
        $product->save();


        return back()->withSuccess('product updated !!');
        
    }

    public function delete($id){
        //dd($id);
        $product = Product::where('id',$id)->first();

        $product->delete();


        return back()->withSuccess('product deleted !!');

    }

    public function show($id){
        //dd($id);
        $product = Product::where('id',$id)->first();

        return view('show', ['product'=>$product]);


    }

    // Add other methods as needed
}
