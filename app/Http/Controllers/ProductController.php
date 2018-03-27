<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest('id')->take(6)->get();

        return view('index', compact('products'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        if ($request->sort == 'date_desc') {
            $products = Product::all()->sortByDesc('id');
        } elseif ($request->sort == 'alpha_asc') {
            $products = Product::all()->sortBy('title');
        } elseif ($request->sort == 'alpha_desc') {
            $products = Product::all()->sortByDesc('title');
        }else {
            $products = Product::all();
        }

        return view('products.index', compact('products'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //        dd($request->search);

        $products = Product::where('title', 'LIKE', '%'.$request->search.'%')
                           ->orWhere('description', 'LIKE',
                               '%'.$request->search.'%')
                           ->get();;


        return view('search', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
