<?php

namespace App\Http\Controllers;

use App\Events\MakeHistory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index() {

    }

    public function create() {
        return view("dash.categories.form");
    }

    public function store(Request $request) {
        $name = $request['name'];
        $category = Category::create([
            'name' => $name
        ]);

        $history_data = [
            "table_name" => "categories",
            "user_id" => Auth::user()->id,
            "type" => "insert",
            "row_id" => $category['id']
        ];

        event(new MakeHistory($history_data));
    }

    public function edit() {

    }

    public function update(Request $request) {

    }
}
