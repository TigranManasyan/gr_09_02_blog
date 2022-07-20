<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryAPIController extends Controller
{
    public function index() {
        $categories = Category::get();
        return response()->json($categories);
    }

    public function store(Request $request) {
        $data = ["name" => $request['name']];
        Category::create($data);
    }
}
