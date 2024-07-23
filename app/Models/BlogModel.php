<?php

namespace App\Models;

use App\Models\BlogTangModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';


    public function getTag(){
        return $this->hasMany(BlogTangModel::class,'blog_id');
    }
}
