<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductController extends Controller
{
    //Modulo que muestra la lista de productos existentes
    public function index(Request $request): View
    {
        $products = Product::paginate();

        return view('product.index', compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * $products->perPage());
    }

    //Modulo para la creacion de nuevo producto 
    public function create(): View
    {
        $product = new Product();

        return view('product.create', compact('product'));
    }

    //Modulo de almacenamiento de producto
    public function store(ProductRequest $request): RedirectResponse
    {
        Product::create($request->validated());

        return Redirect::route('products.index')
            ->with('success', 'Product created successfully.');
    }

    //Modulo de visualizacion de producto
    public function show($id): View
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    //Modulo de visualizacion de edicion
    public function edit($id): View
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    //Modulo de actualizacin
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->validated());

        return Redirect::route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Product::find($id)->delete();

        return Redirect::route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}