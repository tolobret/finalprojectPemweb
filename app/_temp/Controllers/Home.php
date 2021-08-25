<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Login | Edulab'
		];
		return view('login', $data);
	}
	public function register()
	{
		$data = [
			'title' => 'Register | Edulab'
		];
		return view('register', $data);
	}

	public function forgotpassword()
	{
		$data = [
			'title' => 'Forgot Password | Edulab'
		];
		return view('forgotpassword', $data);
	}

	public function recoverpassword()
	{
		$data = [
			'title' => 'Recover Password | Edulab'
		];
		return view('recoverpassword', $data);
	}
}
