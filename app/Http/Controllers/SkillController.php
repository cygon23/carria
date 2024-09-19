<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function userSkill(){
        return view('backend.user.skills');
    }
}
