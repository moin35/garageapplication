<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Header;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //Reg Start For Super Admin
public function adminregget($eid){
    if(Auth::check()){
        $sadmin = User::All();
        //return $sadmin;
          return view('adminlogin.adminreg')->with('admin',$sadmin);
    } else {'not logged in !';}
}
public function adminregpost($eid){
    if(Auth::check()){
        $name=Input::get('name');
        $eid=Input::get('eid');
        $email=Input::get('email');
        $chak=User::where('email','=',$email)->count();
        if($chak>0)
        {
        Session::flash('em',1);
        return Redirect::to('adminreg');

        }
        else {
        $password = Hash::make(Input::get('password'));

        if(Input::hasFile('image')){
          $extension = Input::file('image')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'images/adminimage/';
                        Input::file('image')->move($destinationPath,$fname);
                       $final=$fname;
                   }   

        }
        else{

            $final='';
        }

        $nn = new User;
        $nn->name=$name;
        $nn->eid=$eid;
        $nn->email=$email;
        $nn->created_at=date('ymdhms');
        $nn->password=$password;
        $nn->img=$final;
        $nn->save();
        Session::flash('s',1);
        return Redirect::to('adminreg/'.$eid);
        }
    } 
}
    //Reg End For Super Admin
   //Auth Start For Super Admin
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
    public function getlogin(){
    if(Auth::check())
    {
        return Redirect::to('dashboard');
    }
    else
    {
        return view('adminlogin.login');
    }  
    
    }

    public function postlogin(){
        
        if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('pass')])){
            if(Auth::check()){
                return Redirect::to('dashboard');
            }
        }
        else
        {
            Session::flash('saved',1);
            return view('adminlogin.login');
        }
    }
//Auth End For Super Admin
//Dashboard Start here
    public function index(){
        if(Auth::check())
        {

            return view('dashboard.welcome');
        }
        else
        {
            return 'not logged in!';
        }
    }
 //Dashboard End here
//Admin Profile View start
    public function adminprofileget($eid){
        if(Auth::check()){
   $adminprofileview= User::where('eid','=',$eid)->first();
        //return $adminprofileview;
          return view('adminlogin.adminprofile')->with('adminprofile',$adminprofileview);
        } else{'You are not logged in !!';}
    }
//Admin Profile View End
//Password Change Function Start
    public function changepassget($eid){
        if(Auth::check()){

        $pass =User::where('eid','=',$eid)->first();
        
        return view('adminlogin.changepass')->
        with('pass',$pass);
        } else {'not logged in!';}
    }
public function changepasspost($eid){
        if(Auth::check())
            { 
         $pass1 = Input::get('newp');
         $pass2 = Input::get('newp1');
         if($pass1 == $pass2){
         $pass = Hash::make($pass1);
        $u = User::where('eid','=',$eid)->update(array('password'=>$pass));

            Session::flash('passok','Password Changed Successfully!'); //notification for password matched
            return Redirect::to('changepass/'.$eid);
         }
         else{
            
            Session::flash('passok','Password Didnot Change!'); //notification for password matched
            return Redirect::to('changepass/'.$eid);
            }
                
                 }
                 else
                 {
                    return 'not logged in!';
                }
    }
//Password Change Function End
//Header Function Start
    public function headerget($eid){
        if(Auth::check()){
            $head=Header::all();
            return view('header.addheader');
        } else {return 'not logged in !';}
    }
    public function headerpost($eid){
        if(Auth::check()){
            $companyname=Input::get('company_name');
            $eid=User::where('eid','=',$eid)->pluck('eid');
        if(Input::hasFile('image')){
          $extension = Input::file('image')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'images/adminimage/';
                        Input::file('image')->move($destinationPath,$fname);
                       $final=$fname;
                   }   

        }
        else{

            $final='';
        }
if(Input::hasFile('fev')){
          $extension = Input::file('fev')->getClientOriginalExtension();
                   if($extension=='png'||$extension=='jpg'||$extension=='jpeg'||$extension=='bmp'||
                      $extension=='PNG'||$extension=='jpg'||$extension=='JPEG'||$extension=='BMP'){
                       $date=date('dmyhsu');
                        $fname=$date.'.'.$extension;
                        $destinationPath = 'images/adminimage/';
                        Input::file('fev')->move($destinationPath,$fname);
                       $fev=$fname;
                   }   

        }
        else{

            $fev='';
        }
        $nn = new Header;
        $nn->company_name=$companyname;
        $nn->eid=$eid;
        $nn->company_logo=$final;
        $nn->fevicon=$fev;
        $nn->save();
        Session::flash('s',1);
        return Redirect::to('header/'.$eid);
        } else {'not logged in!';}
    }
//Header Function End


    
}