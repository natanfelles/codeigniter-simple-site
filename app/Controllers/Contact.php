<?php namespace App\Controllers;

use App\Models\Contacts;

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
		$data = $this->request->getPost([
			'name',
			'email',
			'subject',
			'message',
		]);
		$contacts = new Contacts();
		$id = $contacts->insert($data);
		if ($id === false) {
			return redirect()->route('contact.create')
				->withInput()
				->with('errors', $contacts->errors());
		}
		return redirect()->route('contact.create')->with('msg', [
			'type' => 'success',
			'contents' => 'Contact successful sent.',
		]);
	}
}