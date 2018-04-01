<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Option;

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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = [];
        foreach (Category::all() as $item) {
            $categories[$item->id] = $item->title;
        }

        return view('admin.products.create', compact('categories'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $image_name = time().$file->getClientOriginalName();

            $file->move(public_path('img'), $image_name);
        } else {
            $image_name = 'no-image.png';
        }

        $request->request->add(['image' => $image_name]);

        $this->validate($request, [
            'title' => 'required|unique:products,title',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Добавлено');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $categories = [];
        foreach (Category::all() as $item) {
            $categories[$item->id] = $item->title;
        }

        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $image_name = time().$file->getClientOriginalName();

            $file->move(public_path('img'), $image_name);
        } else {
            $image_name = $product->image;
        }

        $request->request->add(['image' => $image_name]);

        $this->validate($request, [
            'title' => 'required|unique:products,title,'.$product->id,
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->back()->with('success', 'Сохранено');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Удалено');
    }
}
