<?php

namespace App\Services;

class StudentService
{
	public function list()
	{
		$service = \App\Factories\StudentServiceFactory::createListService('dps');
		return $service->list();
	}
}