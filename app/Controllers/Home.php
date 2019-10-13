<?php

namespace App\Controllers;

error_reporting(-1);

class Home extends BaseController
{

	public function __construct()
	{
		/*$this->load->library('session');

		if ( $this->session->logged_in )
		{
			// Dans ce cas de figure, le fait qu'un utilisateur est connecté se vérifie si session->logged_in est à 1. Dans tous les autres cas, on passera au ELSE.
		}
		else
		{
			$this->load->helper('url');
			// Retour direct à la page d'accueil (ou pourquoi pas à une page de connexion)
			redirect('/');
		}*/
		/*if (! isAdmin())
			echo('Not allowed to see this page');*/
	}

	public function index()
	{
		//      dd($this->request);
		//      $this->load->helper('form_helper');
		$data = [
			'pseudo'   => 'Arthur',
			'email'    => 'dd@dd.dd',
			'en_ligne' => true,
		];

		return view('home/vue', $data);
		//      $this->load->view('home/vue', $data);
	}

	public function home()
	{
		redirect('home');
	}
	/*public function _output($output)
	{

	}*/

	/*public function _remap($method)
	{
		if (method_exists(Home::class, $method)) {
			$this->$method();
		} else {
			show404();
		}
	}*/
}
