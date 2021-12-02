<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Database\Seeders\categoriesTableSeeder;
use Exception;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function indexCategory ()
    {
        // $category = Category::orderBy('id', 'DESC')->orderBy('user_id', 'ASC')->get();
        // $category = Category::orderBy(['id' => 'DESC','user_id' => 'ASC'])->get();
        // $category = Category::find(3);
        // $category = Category::take(3)->get();
        // $category = Category::orderBy('id', 'desc')->get();
        // $category = Category::where('user_id', 20)->orderBy('id', 'desc')->get();
        // $categories = Category::get();

        $categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('backend.category.manage_category', compact('categories'));
    }

    public function createCategory ()
    {
        return view('backend.category.add_category');
    }

    public function storeCategory (Request $request)
    {
        $request->validate([
            'name'  => 'required|string|unique:categories',
            'status'  => 'required|string'
        ]);

        try {
            // rule-1 instantsciate create (query builder)

            // $category = new Category();
            // $category->user_id = auth()->id();
            // $category->name = $request->name;
            // $category->slug = strtolower(str_replace(' ', '_', $request->name));
            // $category->status = $request->status;
            // $category->save();

            // rule-2

            Category::create([
                'user_id' => auth()->id(),
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ', '_', $request->name)),
                'status' => $request->status
            ]);

            session()->flash('type', 'success');
            session()->flash('message', 'Category add successfully.');
        } catch (Exception $exc) {
            session()->flash('type', 'danger');
            session()->flash('message', $exc->getMessage());
        }

        return view('backend.category.add_category');
    }

    public function destroyCategory ($id)
    {
        $delCat = Category::find($id);

        $delCat->delete();

        session()->flash('type', 'success');
        session()->flash('message', 'Category delete successfully.');

        return redirect()->back();
    }

    public function show($id){
        // dd($id);
        $category = Category::find($id);
        return view('backend.category.view_category', compact('category'));
    }

    public function edit($id){
        $category = Category::find($id);
        if($category){
            return view('backend.category.edit_category', compact('category'));
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        // return $request->all();

        $validation = [
            'name'  =>  'required|string|unique:categories,id,' . $id,
            'status'   => 'required|string',
        ];

        $validators = Validator::make($request->all(), $validation);

        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }

        try {
            $category = Category::find($id);

            $category->user_id = auth()->id();
            $category->name = $request->name;
            $category->slug = strtolower(str_replace(' ', '_', $request->name));
            $category->status = $request->status;
            $category->update();

            session()->flash('type', 'success');
            session()->flash('message', 'Category Update successfully.');
        } catch (Exception $exc) {
            session()->flash('type', 'danger');
            session()->flash('message', $exc->getMessage());
        }

        // return redirect()->back();
        return redirect('admin/category/index');

    }
}
