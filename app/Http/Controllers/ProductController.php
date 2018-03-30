<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::latest('id')->take(6)->get();

        return view('index', compact('products'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $products = Product::where('title', 'LIKE', '%' . $request->q . '%')
                           ->orWhere('description', 'LIKE', '%' . $request->q . '%')
                           ->get();

        return view('search', compact('products'));
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
