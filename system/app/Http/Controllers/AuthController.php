<?php 
namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{
		function showLogin(){
		return view('login');
	}
	function LoginProcess(){
		if(Auth::attempt(['email'=> request('email'), 'password' => request('password')])){
			return redirect('beranda')->with ('uccess', 'login Berhasil');
		}else{
			return back()->with('danger','login Gagal, Silahkan cek email dan password');
		}
	}
	function Logout(){
		Auth::Logout();
		return redirect('beranda');
	}
	function Forgotpasswaord(){
		return view('login');
	}






	function showregister(){
     return view('register');
	}
	}