<?php

namespace Sahadat\Sfaq\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Sahadat\Sfaq\Models\Category;
use Sahadat\Sfaq\Models\Question;


class CategoryController extends Controller
{

    public function index(){
        $cat = Category::all();
        return view('sfaq::index', ['category' => $cat]);
    }

    public function admin_index(){
        $cat = Category::all();
        return view('sfaq::admin.admin-index', ['category' => $cat]);
    }

    public function show($id){
        $sltCat = Category::find($id);
        return view('sfaq::admin.show', ['sltCategory' => $sltCat]);
    }

    public function create_cat(){
        request()->validate([
            'category' => 'required',
        ]);

        Category::create([
            'category' => request('category'),
            'priority' => request('setPriority'),
        ]);

        return redirect('/admin')->with('success','Category created');
    }

    public function delete($id){

        Category::destroy($id);

        return redirect('/admin')->with('success', 'Category has been deleted successfully');

    }

    public function update($id){

        $cat = Category::find($id);

       request()->validate([
           'categoryEdit' => 'required',
       ]);

       $cat->update([
           'category' => request('categoryEdit'),
           'priority' => request('priority'),
       ]);

       return redirect('/admin')->with('success','Category updated successfully');
    }


    // public function add(){

    //     $cat = new Category();
    //     $cat->category = 'Navigation';
    //     $cat->priority = 2;
    //     $cat->save();

    // }

}
