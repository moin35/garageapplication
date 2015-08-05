<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Header;
use App\Footer;
use App\Year;
use App\Brand;
use App\CarModel;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class ModelController extends Controller
{
//Add Car Information Function Start(Route name:ticket) 
   Public function addticketget($eid){
   	if(Auth::check()){
   		$year=Year::all();
   		$Brand=Brand::all();
   		//$Model=CarModel::all();
   		return view('addingdata.adddata')
   		->with('yr',$year)
   		->with('bnd',$Brand);
   		//->with('mdl',$Model);
   	}else {return 'not logged in!';}
   }
   Public function addticketpost($eid){
   	if(Auth::check()){
   		$year=Input::get('year');
   		$brand=Input::get('brand_name');
   		$model=Input::get('car_model_name');
   		$check=Brand::where('year','=',$year)->where('brand_name','=',$brand)->count();
   		if($check>0){
   			Session::flash('year',1);
    		return Redirect::to('ticket/'.$eid);
   		}
   		else {
   		$ticket=New Year;
   		$ticket->year=$year;
   		$ticket->save();

   		$ticket1=New Brand;
   		$ticket1->brand_name=$brand;
   		$ticket1->year=$year;
   		$ticket1->save();

   		/*$ticket2=New CarModel;
   		$ticket2->car_model_name=$model;
   		$ticket2->year=$year;
   		$ticket2->brand_name=$brand;
		$ticket2->save();*/

		Session::flash('saved',1);  
        return Redirect::to('ticket/'.$eid);
}
   	}else{return 'Not Logged in !';}
   }
   //Add Car Information End
 //View CarModel & Ticket Information Function Start(Route Name:viewticket)

//View CarModel & Ticket Information Function End


}
