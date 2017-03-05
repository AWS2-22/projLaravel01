<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Missatge;

class ChatController extends Controller
{

    //localhost:8000/chat
	public function index()
    {
		$arrayMissatge = Missatge::all();
        return view('chat.index',array('arrayMissatge'=>$arrayMissatge));
	}

    //localhost:8000
    public function getHome()
    {
        $arrayMissatge = Missatge::all();
        return view('chat.index',array('arrayMissatge'=>$arrayMissatge));
    }

    //crear missatges
    public function postCreate(Request $request){

    	$missatge = new Missatge();
    	if ($request-> has("nick") && $request-> has("text"))
    	{
    		$missatge->nick = $request->input("nick");
    		$missatge->text = $request->input("text");
            //guardar missatges a la BBDD
    		$missatge->save();
            return redirect()->action("ChatController@getIndex");
    	}
        else
        {
            return redirect()->action("ChatController@getIndex");
        }
    }
}
