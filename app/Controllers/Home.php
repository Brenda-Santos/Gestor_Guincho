<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('user/pages/login');		
	}


	public function login()
	{
		$user = $_POST["user"];
		$password = $_POST["password"];

		$user_model = $this->login_model->login($user, $password);
		
		if($user_model){
			$this->session->set_userdata('logged_user', $user_model);
			redirect('dashboard');
		}
		else{
			redirect('login');
		}
	}

	//--------------------------------------------------------------------

}


