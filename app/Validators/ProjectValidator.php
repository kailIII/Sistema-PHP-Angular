<?php

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{

	protected $rules = [
		'owner_id' => 'required|integer',
		'client_id' => 'required|integer',
		'description' =>'required',
		'status' => 'required',
		'progress' => 'required',
		'due_date' => 'required'
	];
}