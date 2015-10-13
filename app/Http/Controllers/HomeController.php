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
use App\Client;
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
               if($extension=='png'
                ||$extension=='jpg'
                ||$extension=='jpeg'
                ||$extension=='bmp'
                ||$extension=='PNG'
                ||$extension=='jpg'
                ||$extension=='JPEG'
                ||$extension=='BMP'
                ||$extension=='gif'){
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
    
    if(Auth::attempt(['username'=>Input::get('username'),'password'=>Input::get('pass')])){
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
        return view('/');
    }
}
public function indexp(){
    if(Auth::check())
    {
       $name=Input::get('name');
       $carnum=Input::get('car_num');
       $phone=Input::get('phone');
       $address=Input::get('address');

       $client=new Client;
       $client->name=$name;
       $client->car_num=$carnum;
       $client->phone=$phone;
       $client->address=$address;
      
       $client->save();
        return Redirect::to('tk1');
    }
    else
    {
        return view('/');
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

public function adminprofileupdatepost($eid){
    if(Auth::check())
        { 
            if(Input::hasFile('image')){
      $extension = Input::file('image')->getClientOriginalExtension();
               if($extension=='png'
                ||$extension=='jpg'
                ||$extension=='jpeg'
                ||$extension=='bmp'
                ||$extension=='PNG'
                ||$extension=='jpg'
                ||$extension=='JPEG'
                ||$extension=='BMP')
               {
                   $date=date('dmyhsu');
                    $fname=$date.'.'.$extension;
                    $destinationPath ='images/adminimage/';
                    Input::file('image')->move($destinationPath,$fname);
                   $final=$fname;
                   $up = User::where('eid','=',$eid)->
            update(['img'=>$final]);
               }   

    }
    else{

        $final='';
    }
$up = User::where('eid','=',$eid)->
   update(['name'=>Input::get('name'),'email'=>Input::get('email')]);
            
    Session::flash('updateprofile',1);
    return Redirect::to('adminprofile/'.$eid);}
    else{return 'not logged in!';}
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
     if($pass1 == $pass2)
     {
     $pass = Hash::make($pass1);
     $u = User::where('eid','=',$eid)
     ->update(array('password'=>$pass));

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
        $head=User::where('eid','=',Auth::user()->eid)->first();
        return view('header.addheader')->with('header',$head);
    } else {return 'not logged in !';}
}
    

public function headerpost($eid){
    if(Auth::check())
        { 
            if(Input::hasFile('image')){
      $extension = Input::file('image')->getClientOriginalExtension();
               if($extension=='png'
                ||$extension=='jpg'
                ||$extension=='jpeg'
                ||$extension=='bmp'
                ||$extension=='PNG'
                ||$extension=='jpg'
                ||$extension=='JPEG'
                ||$extension=='BMP'
                ||$extension=='gif')
               {
                   $date=date('dmyhsu');
                    $fname=$date.'.'.$extension;
                    $destinationPath ='images/adminimage/';
                    Input::file('image')->move($destinationPath,$fname);
                   $final=$fname;
                   $up = User::where('eid','=',$eid)->
            update(['company_logo'=>$final]);
               }   

    }
    else{

        $final='';
    }


if(Input::hasFile('fev')){
      $extension1 = Input::file('fev')->getClientOriginalExtension();
               if($extension1=='ico'|| $extension1=='ICO'){
                   $date=date('dmyhsu');
                    $fname=$date.'.'.$extension1;
                    $destinationPath ='images/adminimage/';
                    Input::file('fev')->move($destinationPath,$fname);
                   $fev=$fname;
                   $up = User::where('eid','=',$eid)->
            update(['fevicon'=>$fev]);
               }   

    }
    else{

        $fev='';
    }

  
       $up = User::where('eid','=',$eid)->
            update(['company_name'=>Input::get('company_name')
                    ,'year'=>Input::get('year'),
                'link'=>Input::get('link')
              ]);
    
    Session::flash('head',1);
    return Redirect::to('header/'.$eid);}
    else{return 'not logged in!';}
}
//Header Function End
//Client Reg Function Start
public function regget(){
        $reg = User::all();
        return view('adminlogin.reg')->with('reguser',$reg);
    }
 public function regpost(){
    $username=Input::get('username');
    $name=Input::get('name');
    $eid=Input::get('eid');
    $email=Input::get('email');
    $gender=Input::get('gender');
    $chak=User::where('email','=',$email)->count();
    if($chak>0)
    {
    Session::flash('em',1);
    return Redirect::to('reg');

    }
    else {
    $password = Hash::make(Input::get('password'));

    if(Input::hasFile('image')){
      $extension = Input::file('image')->getClientOriginalExtension();
               if($extension=='png'
                ||$extension=='jpg'
                ||$extension=='jpeg'
                ||$extension=='bmp'
                ||$extension=='PNG'
                ||$extension=='jpg'
                ||$extension=='JPEG'
                ||$extension=='BMP'){
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
    $nn->username=$username;
    $nn->eid=$eid;
    $nn->email=$email;
    $nn->created_at=date('ymdhms');
    $nn->password=$password;
    $nn->img=$final;
    $nn->gender=$gender;
    $nn->save();

    $pp=new Header;
    $pp->eid=$eid;
    $pp->save();

    $ff=new Footer;
    $ff->eid=$eid;
    $ff->save();
    Session::flash('s',1);
    return Redirect::to('/');
    }

} 
  
//Client Reg Function end


}