<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Province;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Hash;
use DB;
use View;
use Response;
use App\Http\Requests\ProvinceRequest;


class AdminController extends Controller {

	/**
	 * Show the profile for the given user.
	 *
	 * @param int $id
	 * @return Response
	 */
	public function index() {
		return view ( 'index' );
	}
	public function store(Request $request) {
		return $request->file ( 'gallery' );
		exit ();
	}
	public function showlogin() {
		if (! ($this->islogin ())) {
			return view ( 'administration.login' );
		} else {
			return redirect ()->route ( 'dashboard' );
		}
	}
	public function dashboard() {
		if (! ($this->islogin ())) {
			return view ( 'administration.login' );
		}
		return view ( 'administration.index' );
	}
	public function localization() {
		if (! ($this->islogin ())) {
			return view ( 'administration.login' );
		}
		return view ( 'administration.modules.province.list' );
	}
	public function localization_save(ProvinceRequest $request) {
			$this->validate($request, ['pro_name_kh'=>'required','pro_name_en'=>'required']);
			return '11';
			$province_name_kh = Input::get ( 'pro_name_kh' );
			$province_name_en = Input::get( 'pro_name_en' );
			$lng = Input::get('lng');
			$lat = Input::get('lat');
			$province = new Province ();
			$file = $request->file ( 'icon_marker' );
			$destination_path = 'photo/icons/';
			$filename = str_random ( 6 ) . '_' . $file->getClientOriginalName ();
			$file->move ( $destination_path, $filename );
			$province->pro_name_kh = $province_name_kh;
			$province->pro_name_en = $province_name_en;
			$province->lng = $lng;
			$province->lat = $lat;
			$province->icon_marker = $destination_path . $filename;
			$province->save ();

		//}
	}
	public function dologin() {
		$username = Input::get ( 'username' );
		$password = Input::get ( 'password' );
		$user = DB::table ( 'tbl_user as u' )->where ( 'u.user_username', '=', $username )->where ( 'u.user_password', '=', $password )->get ();
		if ($user) {
			Session::put ( 'is_login', true );
			Session::put ( 'user_name', $user [0]->user_first_name . ' ' . $user [0]->user_last_name );
			Session::put ( 'message', 'You are now succesful loged in into our system!' );
			return redirect ()->route ( 'dashboard' );
		} else {
			Session::put ( 'is_login', false );
			Session::put ( 'user_name', NULL );
			Session::put ( 'message', 'Please check your username or password,then try it again!' );
			return redirect ()->route ( 'admin' );
		}
	}
	public function islogin() {
		return Session::get ( 'is_login' );
	}
	public function userjson() {
		return view ( 'user.json' );
	}
	public function logout() {
		Session::flush ();
		return redirect ( 'admin/' );
	}
}