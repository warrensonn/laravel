<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductManagingController extends Controller
{
    public function modify(Request $request, $idProduit)
    {
        $product = Product::find($idProduit);
        return view('modify_product', compact('product'));
    }

    public function update(Request $request, $idProduit)
    {
        $description = $request->input('description');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $this->validateProduct($request);

        $statut = Product::where('id', $idProduit)
            ->update(['description' => $description, 'price' => $price, 'quantity' => $quantity]);

        if ($statut) {
            $message = 'Modification réussie' . $idProduit . ' :';
            $message2 = 'Nom -> ' . $description . ', Prix -> ' . $price . '€, Quantité -> ' . $quantity;
            return view('message', compact('message', 'message2'));
        }
    }

    public function delete(Request $request, $idProduit)
    {
        $deleted = Product::destroy($idProduit);

        if ($deleted) {
            $message = 'Suppression réussie';
        } else {
            $message = 'Suppression impossible';
        }
        $products = Product::all();

        return view('products', ['products' => $products])->with('message', $message);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('message', 'Le produit a été supprimé avec succès.');
    }

    public function add(Request $request)
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {
        // Check that values given are good for product
        $validatedData = $this->validateProduct($request);
        echo $validatedData;

        $add = Product::create([
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity')
        ]);

        if ($add) {
            $message = "L'article a bien été ajouté";
        } else {
            $message = "L'article n'a pas pu être ajouté";
        }
        return view('addProduct')->with('message', $message);
    }

    private function validateProduct(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0'
        ]);
    }
}
