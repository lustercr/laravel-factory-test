<?php

namespace App\Services\Students;

class StudentListService
{
	private $tenant;

	function __construct($tenant) {
    	$this->tenant = $tenant;    
    }

	public function list()
	{
		return array('name' => $this->tenant);
	}
}