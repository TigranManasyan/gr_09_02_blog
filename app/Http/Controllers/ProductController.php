<?php

namespace App\Http\Controllers;

use App\Models\CategoryOld;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table("products")
            ->join("categories", "products.category_id", "=", "categories.id")
            ->join("users", "products.user_id", "=", "users.id")
            ->select("products.name as Product", "categories.name as CategoryOld", "users.name as CreatedBy")
//            ->where("products.category_id", "=", 60)
            ->get();

        $products = json_decode($products, true);
        return view("dash.products.index", compact("products"));
//        return view("dash.index", [
//            "products" => $products
//        ]);
    }

    public function create() {
        return view("dash.products.create", ["categories" => CategoryOld::get()]);
    }

    public function store(Request $request) {
        $data = [
            'name' => $request['name'],
            'qt' => $request['qt'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
            'user_id' => Auth::user()->id,
        ];

        $store = Product::create($data);
        if($store) {
            return redirect()->back();
        }
    }

    public function delete($id) {
        $category = CategoryOld::find($id);
        $category->delete();
    }
}
