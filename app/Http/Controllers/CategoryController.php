<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
     public function index()
    {
        $Categories = Category::all();
        return view('Categories.index', ['items' => $Categories]);
    }

    public function store(Request $request)
    {
        Category:: create([
            'category_name' => $request->category_name123,
        ]);
        return redirect('/categories');
    }

    
    public function edit($id)
    {
        $Categories = Category::findorfail($id);
        return view('categories.edit', ['item' => $Categories]);
    }
    public function update(Request $request, $id)
    {
        $Categories = Category::findorfail($id);
        $Categories->update([
            'category_name' => $request->category_name123,

        ]);

        return redirect('/categories');
    }
        public function destroy($id)
        {
            $Categories = Category::findorfail($id);
            $Categories->delete();
            return redirect('/categories');
        }
}
