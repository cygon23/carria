<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{

    public function category() {
        $users = DB::table('category')
            ->where('is_delete', 0)
            ->orderBy('name', 'desc')
            ->paginate(10);

        return view('backend.category.list', compact('users'));
    }

    public function add_category(){
        return view('backend.category.add');
    }

    public function insert_category(Request $request){

        $save = new CategoryModel;
        $save->name = trim($request->name);
        $save->slug  = trim($request->slug );
        $save->title   = trim($request->title  );
        $save->meta_title  = trim($request->meta_title );
        $save->meta_description = trim($request->meta_description );
        $save->meta_keywords  = trim($request->meta_keywords );
        $save->status  = trim($request->status );
        $save->save();

        return redirect('panel/category/list')->with('success','Category succefully added');

    }

    public function edit_category($id){
        $data['getRecord'] = CategoryModel::getSingle($id);
        return view('backend.category.edit', $data);

    }

    public function update_category($id, Request $request){

        $request->validate([
            'slug' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'status' => 'required|integer',
        ]);

        $save = CategoryModel::getSingle($id);
        $save->name = trim($request->name);
        $save->slug  = trim($request->slug );
        $save->title   = trim($request->title  );
        $save->meta_title  = trim($request->meta_title );
        $save->meta_description = trim($request->meta_description );
        $save->meta_keywords  = trim($request->meta_keywords );
        $save->status  = trim($request->status );
        $save->save();

        return redirect('panel/category/list')->with('success','Category succefully updated');

    }

    public function delete_category($id){
        $save = CategoryModel::find($id);
        $save->is_delete = 1;
        $save->save();

        return redirect('panel/category/list')->with('success','Category succefully deleted');
    }
}
