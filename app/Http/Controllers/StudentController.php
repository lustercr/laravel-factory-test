<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    	$service = new \App\Services\StudentService();
        return  $service->list();
    }
}
