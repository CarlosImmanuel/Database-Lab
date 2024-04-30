<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product) {
        return view('TokoIBIK.modules.products.index', [
            "data" => $product->paginate(5)
        ]);
    }
    public function edit(Product $product) {
        return view('TokoIBIK.modules.products.edit', [
            "product" => $product
        ]);
    }
    public function getDataByID(Product $product) {
        return view('TokoIBIK.modules.products.show', [
            "data" => $product
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "name" => "required|max:25",
            "description" => "required|max:30",
            "price" => "required|min:1|max:8",
        ]);

        Product::create($validateData);

        return redirect('/')->with('success', "Data sukses disimpan");
    }

    public function update(Request $request, Product $product) {
        $validateData = $request->validate([
            "name" => "required|max:25",
            "description" => "required|max:30",
            "price" => "required|min:1|max:8",
        ]);

        $product->where("id", $product->id)->update($validateData);

        return redirect('/')->with('success', "Data sukses Diedit");
    }

    public function destroy(Product $product){
        $product->delete($product->id);
        return redirect('/')->with('success', "Data berhasil Dihapus");
    }
}
