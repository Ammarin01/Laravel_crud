<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class TestColtroller extends Controller
{
    //
    public function index(){
        $data['test']= Company::orderBy('id','desc')->paginate(5);
        return view('Companies.index',$data);
    }
}
