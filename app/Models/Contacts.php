<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class Contacts extends Model
{
	protected $table = 'contacts';
	protected $allowedFields = [
		'name',
		'email',
		'subject',
		'message',
	];
	protected $validationRules = [
		'name' => [
			'label' => 'Name',
			'rules' => 'required|min_length[5]|max_length[64]',
		],
		'email' => [
			'label' => 'Email',
			'rules' => 'required|valid_email',
		],
		'subject' => [
			'label' => 'Subject',
			'rules' => 'required|min_length[10]|max_length[255]',
		],
		'message' => [
			'label' => 'Message',
			'rules' => 'required|min_length[10]|max_length[2048]',
		],
	];

	public function __construct(
		ConnectionInterface &$db = null,
		ValidationInterface $validation = null
	) {
		parent::__construct($db, $validation);

		$this->validationRules['name']['label'] = lang('contact.name');
		$this->validationRules['email']['label'] = lang('contact.email');
		$this->validationRules['subject']['label'] = lang('contact.subject');
		$this->validationRules['message']['label'] = lang('contact.message');
	}
}