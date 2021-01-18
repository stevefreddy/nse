<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\CompanyRatio;
use Carbon\Carbon;


use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function list(){
    	$companies = Company::select(
    		'id','name','symbol')->where('deleted_at',NULL)->get();
    	return view('/list',compact('companies'))->with('i');
    }
    public function form($id=NULL){
    	if($id){
    		$company = Company::where('id',$id)->first();
            $company_ratio = CompanyRatio::where('company_id',$id)->first();
    	}else{
    		$company = new Company;
            $company_ratio = new CompanyRatio;
    	}
    	return view('/form',['company' => $company, 'company_ratio' => $company_ratio]);
    }
    public function save(Request $request){

    	if($request->id){
    		$company = Company::where('id',$request->id)->first();
            $company_ratio = CompanyRatio::where('company_id',$request->id)->first();
    	}else{
    		$company = new Company;
            $company_ratio = new CompanyRatio;
    	}
    	$company->name = $request->name;
    	$company->symbol = $request->symbol;

        $company_ratio->market_cap = $request->market_cap;
        $company_ratio->current_market_price = $request->current_market_price;
        $company_ratio->stock_pe = $request->stock_pe;
        $company_ratio->dividend_yield = $request->dividend_yield;
        $company_ratio->roce = $request->roce;
        $company_ratio->roe = $request->roe;
        $company_ratio->debt_to_equity = $request->debt_to_equity;
        $company_ratio->eps = $request->eps;
        $company_ratio->reserves = $request->reserves;
        $company_ratio->debt = $request->debt;

        $company->save();
        $company_ratio->save();

       return redirect('/list')->with('success', 'Company Added');

    }

    public function view($id){

    	$company = Company::where('id',$id)->first();
    	return view('/view',compact('company'));
    }

    public function delete($id){

    	$company = Company::where('id',$id)->first();
    	$company->deleted_at = Carbon::now();
    	$company->save();

    	return redirect('/list');
    }
}
