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
   		
   		$check=Brand::where('year','=',$year)->where('brand_name','=',$brand)->count();
   		if($check>0){
   			Session::flash('year',1);
    		return Redirect::to('ticket/'.$eid);
   		}
   		else {

           if($year!='') {
         $ticket=New Year;
         $ticket->year='';         
         $ticket->save();

           }
   		
   		elseif($brand!=''){
            $ticket1=New Brand;
         $ticket1->brand_name=$brand;       
         $ticket1->save();
         }
		Session::flash('saved',1);  
        return Redirect::to('ticket/'.$eid);
}
   	}else{return view('/');}
   }
   //Add Car Information End
 //Add CarModel & Ticket Information Function Start(Route Name:addmodel)
Public function addmodelget(){
   if(Auth::check()){
      $view1=Year::all()->lists('year','year');
      $view2=Brand::all()->lists('brand_name','brand_name');
      return view('addingdata.addmodelinfo')
      ->with('showyear',$view1)
      ->with('showbrand',$view2);
   }else {return view('/');}
}
Public function addmodelpost(){
   if(Auth::check()){
      $eid=Auth::user()->eid;
      $model=Input::get('car_model_name');
      $year=Input::get('year');
      $brand=Input::get('brand_name');
      
      $check=CarModel::where('year','=',$year)->where('brand_name','=',$brand)->count();
         if($check>0){
                  Session::flash('car',1);
                  return Redirect::to('addmodel');
         }
         else{
         $ticket2=New CarModel;
         $ticket2->car_model_name=$model;
         $ticket2->year=$year;
         $ticket2->brand_name=$brand;
         $ticket2->eid=$eid;
         $ticket2->save();
         Session::flash('showmsg',1);
      return Redirect::to('addmodel');
      }
   } else{return view('/');}
}

//Add CarModel & Ticket Information Function End
//View Ticket Generate Function Start
Public function tktgenerateget(){
   if(Auth::check()){
      $genticket=Year::all()->lists('year','year');
      $genticket1=Brand::all()->lists('brand_name','brand_name');
      $genticket2=CarModel::where('year','=',$genticket)
      ->where('brand_name','=',$genticket1)->lists('car_model_name','car_model_name');

      return view('addingdata.generateticket')
      ->with('gentkyear',$genticket)
      ->with('gentkbrand',$genticket1)
      ->with('gentkmodel',$genticket2);
   }else {return view('/');}
}
//View Ticket Generate Function End
Public function tk1get(){
   if(Auth::check()){
      $genticket=Year::all()->lists('year','year');
      $genticket1=Brand::all()->lists('brand_name','brand_name');
      $check=CarModel::where('year','=',$genticket)
      ->where('brand_name','=',$genticket1)
      ->lists('car_model_name','car_model_name');

      return view('testsearch')
      ->with('gentkyear',$genticket)
      ->with('gentkbrand',$genticket1)
      ->with('gentkmodel',$check);
      
   }else {return view('/');}
}
Public function tk1post(){
   if(Auth::check()){
   
      $year=Input::get('year');

      $brand=Input::get('brand_name');
     
      if($year!=''&& $brand!='' ){
     
          $genticket=Year::all()->lists('year','year');
      $genticket1=Brand::all()->lists('brand_name','brand_name');
      
      $check=CarModel::where('year','=',$year)
      ->where('brand_name','=',$brand)
      ->lists('car_model_name','car_model_name');
        return view('testsearch')->with('gentkmodel',$check)
        ->with('gentkyear',$genticket)
      ->with('gentkbrand',$genticket1);
       return $check;
        }
         Session::flash('showmsg',1);
         Return Redirect::to('tk1');
      

      
   }else {return view('/');}
}


}
