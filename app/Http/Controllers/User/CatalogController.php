<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $categoryFilter = $request->query('category');
        $products = Product::query();

        if ($categoryFilter) {
            if ($categoryFilter === 'Batik Kain') {
                $products->whereIn('category', ['Batik Tulis', 'Batik Cap', 'Batik Cap & Tulis', 'Batik Ecoprint']);
            } else {
                $products->where('category', $categoryFilter);
            }
        }

        $products = $products->latest()->paginate(16);
        $categories = Category::all();

        return view('user.catalog', compact('categories', 'products', 'categoryFilter'), ['type_menu' => 'catalog']);
    }

    public function showCategory($slug)
    {
        $cat = Category::where('slug', $slug)->first();
        $products = $cat->products;
        $categories = Category::all();

        return view('user.catalog.category', compact('categories', 'products', 'cat'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();

        return view('user.detail', compact('categories', 'product'), ['type_menu' => 'catalog']);
    }

    public function download()
    {
        $path = public_path('katalog/katalog-batik-natra.pdf');

        if (!file_exists($path)) {
            abort(404, 'File katalog tidak ditemukan.');
        }

        return response()->download($path, 'katalog-batik-natra.pdf');
    }
}
