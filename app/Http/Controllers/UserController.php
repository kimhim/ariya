<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRegisterValidation;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function store(UserRegisterValidation $request){
    	return $request->file('gallery');
    	exit;
    }

    public function showlogin(){
    	if(!($this->islogin())){
    		return view('administration.login');
    	}else{
    		return redirect()->route('dashboard');
    	}
    }
    public function dashboard(){
    	if(!($this->islogin())){
    		return view('administration.login');
    	}
    	return view('administration.index');
    }

    public function dologin(){
    	$username = Input::get ('username');
    	$password = Input::get('password');
		$user = DB::table('tbl_user as u')
		->where('u.user_username','=',$username)
		->where('u.user_password','=',$password)
		->get();
		if($user){
			Session::put ('is_login',true);
			Session::put ('user_name',$user[0]->user_first_name.' '.$user[0]->user_last_name);
			Session::put('message','You are now succesful loged in into our system!');
			return redirect()->route('dashboard');
		}else{
			Session::put ('is_login',false);
			Session::put ('user_name',NULL);
			Session::put('message','Please check your username or password,then try it again!');
			return redirect()->route('admin');
		}
    }

    public function islogin(){
    	return Session::get('is_login');
    }

    public function userjson(){
		return view('user.json');
    }

    public function logout(){
      Session::flush();
      return redirect('admin/');
    }
}