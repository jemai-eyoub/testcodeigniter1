//<?php
//
//
//namespace App\Controllers;
//
//use CodeIgniter\Controller;
//use Config\Services;
//
//class Auth extends Controller
//{
//
//	private $validation;
//
//	public function __construct(Services $services)
//	{
//		$this->validation = $services::validation();
//	}
//	public function login(): void
//	{
//
//		$this->validation->setRules([
//			'userName' => [
//				'label' => 'first name',
//				'rules' => 'required|alpha|min_length[8]',
//			],
//		],
//			[
//			'lastName' => [
//				'label' => 'Last name',
//				'rules' => 'required|alpha|min_length[8]',
//			],
//			]);
//
//		if (! $this->validation->run())
//		{
//			redirect('logout');
//		}
//		else
//		{
//			echo 'success';
//		}
//	}
//
//	public function attemptLogin(): void
//	{
//	}
//
//	public function logout()
//	{
//		helper('url');
//		$data = [
//			'pseudo' => 'Arthur',
//			'email'  => 'dd@dd.dd',
//			'online' => true,
//		];
//
//		return view('auth/logout', $data);
//	}
//
//	public function register(): void
//	{
//	}
//
//	public function attemptRegister(): void
//	{
//	}
//
//	public function forgotPassword(): void
//	{
//	}
//
//	public function attemptForgot(): void
//	{
//	}
//
//	public function resetPassword(): void
//	{
//	}
//
//	public function attemptReset(): void
//	{
//	}
//
//}
