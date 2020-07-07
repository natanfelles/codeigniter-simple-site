<?php namespace App\Controllers;

class Contact extends BaseController
{
	public function create()
	{
		return view('contact/create', [
			'errors' => session()->getFlashdata('errors'),
			'msg' => session()->getFlashdata('msg'),
		]);
	}

	public function store()
	{
	}
}