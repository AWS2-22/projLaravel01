<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getHome()
	{
		return redirect()->action('ChatController@index');
	}
}