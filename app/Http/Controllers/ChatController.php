<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{

	public function getHome()
	{
		return redirect()->action('ChatController@index');
	}

	public function index() {
		return view( 'chat.index' );
	}
}
