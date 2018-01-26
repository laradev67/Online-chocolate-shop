<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function get(Request $request) {
        $category = Category::query();
        if ( ! empty($request->id)) {
            return $category->where("id", $request->id)->first();
        }
        return $category->get();
    }

    public function edit(Request $request) {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->position = $request->position;
        $category->code = $request->code;
        if ( ! empty($request->image)) {
            $category->image = $request->image->store("public/image");
        }
        $category->save();
    }

    public function delete($id) {
        Category::find($id)->delete();
    }
}
