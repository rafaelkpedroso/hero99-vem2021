<?php

namespace App\Http\Controllers;

use App\Models\Empowerment;
use App\Models\Message;
use App\Models\People;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use App\Models\Points;

class ProfileController extends Controller
{
    public function index(){
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        } else {
            $username = str_replace('@hero99.com.br','',$user->email);
        }

        $mensagens = Message::where('user', $username)->get();
        $numeros = Points::where('user', $username)->get();


        return view('profile')->with([
            'usr'=>$user,
            'mensagens'=>$mensagens,
            'numeros'=>$numeros
        ]);
    }
}
