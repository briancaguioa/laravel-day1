<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;

class SampleController extends Controller
{
    public function greetPerson() {
    	$fullname = 
    	[
    		'name' => 'juan',
    		'middlename' => 'dela',
    		'lastname' => 'cruz'
    	];
    	return view("sample", compact('fullname'));
    }

	public function listPerson() {
		//SELECT * coulumns FROM table-name(samples)
		$users = Sample::all();

		return view('users', compact('users'));
	}
}

