<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Home extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        }

        $words = array (
            "justo","feliz","unido","tranquilo","próspero","normal","brilhante","sadio","livre"
        );
        shuffle($words);

        return view('index2')->with([
            'usr'=>$user,
            'words'=>$words
        ]);

//        Laravel\Socialite\Two\User Object ( [token] => ya29.a0AfH6SMB05oBPIUFp2cH6tZYMbV9AW9qk-uLavYEzkkUVdntzZGgfJWQW-i9YTo53kg0YN6XYhkUNAgGDhdJjQkgXvE_vPVEersZqI99Zdmg-CarIeUX7Le_DBTtl5209nKeHIzpFS_Mt7yF4tYk_FQxvMXACKw8M7zxW5WR088KD
//        [refreshToken] =>
//        [expiresIn] => 3599
//        [id] => 105039270657404497967
//        [nickname] =>
//        [name] => Rafael Pedroso
//        [email] => rafaelpedroso@hero99.com.br
//        [avatar] => https://lh3.googleusercontent.com/a-/AOh14GiEkAApHr49atdiYiegvZMHb9xQsdumW_fmw26PsQ=s96-c
    }

    public function regulamento(){
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        }

        return view('regulamento')->with([
            'usr'=>$user
        ]);

//        Laravel\Socialite\Two\User Object ( [token] => ya29.a0AfH6SMB05oBPIUFp2cH6tZYMbV9AW9qk-uLavYEzkkUVdntzZGgfJWQW-i9YTo53kg0YN6XYhkUNAgGDhdJjQkgXvE_vPVEersZqI99Zdmg-CarIeUX7Le_DBTtl5209nKeHIzpFS_Mt7yF4tYk_FQxvMXACKw8M7zxW5WR088KD
//        [refreshToken] =>
//        [expiresIn] => 3599
//        [id] => 105039270657404497967
//        [nickname] =>
//        [name] => Rafael Pedroso
//        [email] => rafaelpedroso@hero99.com.br
//        [avatar] => https://lh3.googleusercontent.com/a-/AOh14GiEkAApHr49atdiYiegvZMHb9xQsdumW_fmw26PsQ=s96-c
    }

    public function sair(){
        Session::flush();
        return redirect('/');
    }
}
