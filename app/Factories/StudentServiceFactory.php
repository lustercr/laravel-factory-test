<?php

namespace App\Factories;

class StudentServiceFactory
{
	public static function createListService($tenant)
    {	
    	$klass_name = self::getClass($tenant, 'StudentListService');
    	return new $klass_name($tenant);
    }

    public static function getClass($tenant, $klass_name)
    {
    	$namespace = "\App\Services\Students\\";
    	if (class_exists("{$namespace}{ucfirst($tenant)}{$klass_name}")) {
    		$klass_name = "{ucfirst($tenant)}{$klass_name}";
    	}
    	return "{$namespace}{$klass_name}";
    }
}
