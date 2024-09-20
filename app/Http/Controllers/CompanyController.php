<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    static function index(){
        return view('companies.companyHome');
    }
}
