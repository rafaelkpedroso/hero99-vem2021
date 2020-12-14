<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Points;
use App\Models\People;
use App\Models\Empowerment;
use DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        }

        return view('add')->with([
            'usr'=>$user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        }


        // Add message
        $messagetext = $request->message;
        $username = str_replace('@hero99.com.br','',$user->email);

        $message = new Message();
        $message->user = $username;
        $message->message = $messagetext;
        // trata imagem
        if($request->file('foto')){
            $upload = $request->foto->store('mensagens','public');
            $message->image = '/storage/'.$upload;
        }



        $message->save();

        // Add números da sorte
        $mensagensanteriores = Message::where('user', $username)->whereDate('created_at', Carbon::today())->get();
        $quantostem = count($mensagensanteriores);

        if ($quantostem <= 3) {

            for($i=1; $i <=10;$i++){
                $numerodasorte = new Points();
                $numerodasorte->user = $username;
                $numerodasorte->points = 10;
                $numerodasorte->type = 'message';
                $numerodasorte->refid = $message->id;
                $numerodasorte->save();
            }

        }

        return redirect('/message/show/'.$message->id);

    }


    public function empower(Message $message)
    {
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        } else {
            $username = str_replace('@hero99.com.br','',$user->email);
        }

        $empower = new Empowerment();
        $empower->user = $username;
        $empower->messageid = request()->messageid;
        $empower->save();

        $numeroshoje = count(Points::where('user',$username)->whereDate('created_at', Carbon::today())->get());
        if($numeroshoje <= 5){
            $numero = new Points();
            $numero->user = $username;
            $numero->points = 1;
            $numero->type = 'empowerment';
            $numero->refid = request()->messageid;
            $numero->save();
        }

        $todos = Empowerment::where('messageid', request()->messageid)->get();
        return count($todos);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        }

        $mensagem = Message::find(request()->messageid);
        $person = People::where('user', $mensagem->user)->first();
        $empowerment = count(Empowerment::where('messageid', request()->messageid)->get());


        return view('show')->with([
            'usr'=>$user,
            'message'=>$mensagem,
            'person'=>$person,
            'empowerment'=>$empowerment
        ]);
    }

    public function  showall(){
        $user = Session::get('user');
        if(!is_object($user) or !$user->name){

            return redirect('/auth/redirect');
        } else {
            $username = str_replace('@hero99.com.br','',$user->email);
        }

        $query = "
SELECT
message.id,
message.message,
message.image,
people.nome,
people.foto,
(SELECT COUNT(id) FROM empowerment WHERE empowerment.messageid = message.id) AS empowerments,
message.created_at
FROM message
JOIN people
ON people.user = message.user
ORDER BY message.created_at DESC";

        $messages = DB::select($query);



        return view('showall')->with([
            'usr'=>$user,
            'messages'=>$messages
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
