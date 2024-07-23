<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'category';

    public static function getRecord() {
        return self::select('users.*')
                  ->orderBy('users.id', 'desc')
                  ->paginate(20);
    }

    //to prevent default load laravel time loading
    public $timestamps = false;
    static function getSingle($id){
         return self::find($id);
    }

    public function getCategory(){
        return self::select('category.*')
        ->where('status','=', 1)
        ->where('is_delete','=',0)
        ->get();

    }


     // ->paginate(20);


}
