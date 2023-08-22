<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    //Create index
    public function index(){
        $data['companies'] = Company::orderBy('id','asc')->paginate(5);
        return view('Companies.index',$data);
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success','insert data success');
    }

    //Create resource
    public function create(){
        return view('companies.create');
    }
   
}
