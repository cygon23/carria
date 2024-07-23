<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\BlogTangModel;
use Illuminate\Support\Str;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    public function blog(Request $request) {
        $query = DB::table('blog')
                    ->select('blog.*', 'users.name as user_name', 'category.name as category_name')
                    ->join('users', 'users.id', '=', 'blog.user_id')
                    ->join('category', 'category.id', '=', 'blog.category_id');

        // filters for searching
        if (!empty($request->input('username'))) {
            $query = $query->where('users.name', 'like', '%' . $request->input('username') . '%');
        }

        if (!empty($request->input('title'))) {
            $query = $query->where('blog.title', 'like', '%' . $request->input('title') . '%');
        }

        if (!empty($request->input('category'))) {
            $query = $query->where('category.name', 'like', '%' . $request->input('category') . '%');
        }

        if (!empty($request->input('is_publish'))) {
            $is_publish = $request->input('is_publish');

            // Adjust value if needed (example: mapping 100 to 0)
            if ($is_publish == 100) {
                $is_publish = 0;
            }

            $query = $query->where('blog.is_publish', $is_publish);
        }

        if (!empty($request->input('status'))) {
            $is_publish = $request->input('is_publish');

            // Adjust value if needed (example: mapping 100 to 0)
            if ($is_publish == 100) {
                $is_publish = 0;
            }

            $query = $query->where('blog.status', $is_publish);
        }

        if (!empty($request->input('status'))) {
            $query = $query->where('blog.status', $request->input('status'));
        }

        if (!empty($request->input('start_date'))) {
            $query = $query->where('blog.created_at', '>=', $request->input('start_date'));
        }


        // Complete the query
        $query = $query->where('blog.is_delete', '=', 0)
                       ->orderBy('blog.created_at', 'desc')
                       ->paginate(10);


         // Get total count
         $total = $query->count();

        // Fetch the data
        $getRecord = $query;

        // Transform the data to include image URLs
        $getRecord = $getRecord->map(function($item) {
            $item->image_url = ImageHelper::getImage($item->image_file);
            return $item;
        });

        return view('backend.blog.list', compact('getRecord','total'));
    }


    public function add_blog(){
        $categoryModel = new CategoryModel();
        $data['getCategory'] = $categoryModel->getCategory();
        return view('backend.blog.add',$data);
    }


    public function insert_blog(Request $request)
    {
        $save = new BlogModel;
        $save->user_id = Auth::user()->id;
        $save->title = trim($request->title);

        // Validate and set category_id
        if ($request->has('category_id') && is_numeric($request->category_id)) {
            $save->category_id = (int) $request->category_id;
        } else {
            // Handle the error, e.g., return an error message or redirect back with an error
            return back()->with('error', 'invald category id');
        }

        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->is_publish = trim($request->is_publish);
        $save->status = trim($request->status);

        // Check slug
        $slug = Str::slug($request->title);
        $checkSlug = BlogModel::where('slug', '=', $slug)->first();
        if ($checkSlug) {
            $dbslug = $slug. '-'. time();
        } else {
            $dbslug = $slug;
        }
        $save->slug = $dbslug;

        // // For file upload
        // if ($request->hasFile('image_file')) {
        //     $file = $request->file('image_file');
        //     $originalFilename = $file->getClientOriginalName();
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)). '-'. uniqid(). '.'. $ext;
        //     $path = $file->storeAs('public/blog', $filename);
        //     $save->image_file = $filename;
        // }
        // $save->save();

          // For file upload
    if ($request->hasFile('image_file')) {
        $file = $request->file('image_file');
        $originalFilename = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $filename = Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $ext;
        $path = $file->storeAs('public', $filename);
        $save->image_file = $filename;
    }

    $save->save();

        $blog_id = $save->id; // Get the ID of the newly inserted blog

        // Insert new tags for the blog
        if (!empty($request->tags)) {
            $tagsArray = explode(",", $request->tags);

            foreach ($tagsArray as $tag) {
                $blogTag = new BlogTangModel;
                $blogTag->blog_id = $blog_id;
                $blogTag->name = $tag;
                $blogTag->save();
            }
        }

        return redirect('panel/blog/list')->with('success', 'Blog successfully added');
    }
public function edit_blog($id){

    $categoryModel = new CategoryModel();
    $data['getCategory'] = $categoryModel->getCategory();
    $data['getRecord'] = BlogModel::find($id);
    return view('backend.blog.edit',$data);

}


public function update_blog($id, Request $request)
{
    // Validate incoming request data if needed
    $request->validate([
        'title' => 'required|string',
        'category_id' => 'required|integer',
        'tags' => 'nullable|string',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
        'is_publish' => 'required|boolean',
        'status' => 'required|string',
        'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file validation rules as per your needs
    ]);

    // Find the existing blog record
    $blog = BlogModel::find($id);

    if (!$blog) {
        return redirect()->back()->with('error', 'Blog not found.');
    }

    // Update blog record with new data
    $blog->title = trim($request->title);
    $blog->category_id = trim($request->category_id);
    $blog->meta_description = trim($request->meta_description);
    $blog->meta_keywords = trim($request->meta_keywords);
    $blog->is_publish = (bool) $request->is_publish;
    $blog->status = trim($request->status);

    // Handle file upload if a new image is provided
    if ($request->hasFile('image_file')) {
        $file = $request->file('image_file');
        $originalFilename = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $filename = Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $ext;
        $path = $file->storeAs('public/blog', $filename);

        // Update the image file attribute in the database
        $blog->image_file = $filename;
    }
    $blog->save();

    // Delete existing tags for the blog
    BlogTangModel::where('blog_id', $blog->id)->delete();

    // Insert new tags for the blog
    if (!empty($request->tags)) {
        $tagsArray = explode(",", $request->tags);

        foreach ($tagsArray as $tag) {
            $save = new BlogTangModel;
            $save->blog_id = $blog->id;
            $save->name = $tag;
            $save->save();
        }
    }

    return redirect('panel/blog/list')->with('success', 'Blog successfully updated.');
}

    public function delete_blog($id){
        $delete = BlogModel::find($id);
        $delete->is_delete = 1;
        $delete->save();
        return redirect()->back()->with('success', 'Blog successfully deleted.');

}

}


