<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\CompanyRatio;
use Illuminate\Http\Request;
use DB;

class RatioController extends Controller
{
    public function search(Request $request){
    	$companies = Company::select('id',DB::raw('CONCAT(name,",", symbol) as name'))->where('deleted_at',NULL)->get();
    	return view('/home',['companies'=>$companies]);

	}
	public function getData(Request $request){
    	$company = Company::select('name','symbol')->where('id',$request->company_id)->where('deleted_at',NULL)->first();
		$company_ratio = CompanyRatio::select('*')->where('company_id',$request->company_id)->first();
		return view('/details',['company'=>$company,'company_ratio'=>$company_ratio]);
	}
}