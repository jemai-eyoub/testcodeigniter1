<?php

namespace App\Controllers;

// --Commented out by Inspection START (22/10/2019 18:35):
//class Auth extends Controller
//{
//
//	public function login(): void
//	{
//		$validation = Services::validation();
//		$validation->setRules([
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
//		if (! $validation->run())
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
// --Commented out by Inspection STOP (22/10/2019 18:35)
