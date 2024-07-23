<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  static function home(){
    return view('home');
  }
  static function hero(){
    return view('home.hero');
  }

  static function about(){
    return view('home.hero');
  }

  static function contact(){
    return view('home.hero');
  }

  static function team(){
    return view('home.team');
  }

  static function services(){
    return view('home.team');
  }






    public function blog()

    {

        $data['getRecord'] = DB::table('blog')
        ->select('blog.*', 'users.name AS user_name', 'category.name AS category_name', 'blog.image_file')
        ->join('users', 'users.id', '=', 'blog.user_id')
        ->join('category', 'category.id', '=', 'blog.category_id')
        ->where('blog.status', 1)
        ->where('blog.is_publish', 1)
        ->where('blog.is_delete', 1)
        ->orderBy('blog.created_at', 'desc')
        ->paginate(10);

        $data['getRecord']->map(function($item) {
            $item->image_url = ImageHelper::getImage($item->image_file);
            return $item;
        });

        return view('home.blog', $data);


    }






  static function portfolio(){
    return view('home.portfolio');
  }


}
