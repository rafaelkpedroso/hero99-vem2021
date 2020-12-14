<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Jantar extends Controller
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

    public function disparo(){

//        $pessoas = array(
//          'alex@hero99.com.br' => '603628278872267921696',
//          'alexandre@hero99.com.br' => '603628988272267921708',
//          'andrewsilva@hero99.com.br' => '603628229962267921716',
//          'camilavelastin@hero99.com.br' => '603628427962267921727',
//          'cristian@hero99.com.br' => '603628389812267921735',
//          'douglasaparecido@hero99.com.br' => '603628734972267921742',
//          'eduardogabriel@hero99.com.br' => '603628797452267921778',
//          'felipe@hero99.com.br' => '603628895542267921786',
//          'fernandacastro@hero99.com.br' => '603628449112267921805',
//          'giovannibassetto@hero99.com.br' => '603628282182267921816',
//          'heloisagiradi@hero99.com.br' => '603628273442267921823',
//          'jessica@hero99.com.br' => '603628394512267921835',
//          'jhonnysousa@hero99.com.br' => '603628764212267921848',
//          'juniormaciel@hero99.com.br' => '603628975252267921876',
//          'kriselen@hero99.com.br' => '603628556332267921886',
//          'leonardopliskieviski@hero99.com.br' => '603628856892267921890',
//          'leonardoburati@hero99.com.br' => '603628694682267921905',
//          'lucamagalhaes@hero99.com.br' => '603628945582267921918',
//          'lucassantos@hero99.com.br' => '603628398352267921920',
//          'luisfelipepinheiro@hero99.com.br' => '603628582622267921939',
//          'marcelo@hero99.com.br' => '603628429492267921948',
//          'marina@hero99.com.br' => '603628459442267921952',
//          'matheuscarvalho@hero99.com.br' => '603628196722267921975',
//          'matheusafornali@hero99.com.br' => '603628815322267921997',
//          'matheus@hero99.com.br' => '603628443362267922000',
//          'maysaochoa@hero99.com.br' => '603628742342267922011',
//          'osmarjoseph@hero99.com' => '603628471122267922032',
//          'otaviodavid@hero99.com.br' => '603628139392267922045',
//          'paulocarvalho@hero99.com.br' => '603628779872267922064',
//          'pedroschneider@hero99.com.br' => '603628654442267922071',
//          'pedroivo@hero99.com.br' => '603628271222267922084',
//          'philipimagalhaes@hero99.com.br' => '603628554182267922096',
//           'rafael@hero99.com.br' => '603628265382267922222',
//          'renatohenrique@hero99.com.br' => '603628187582267922104',
//          'romullocordeiro@hero99.com.br' => '603628969432267922134',
//          'tatianeramos@hero99.com.br' => '603628645372267922146',
//          'thiago@hero99.com.br' => '603628122152267922164',
//          'thiagopereira@hero99.com.br' => '603628544332267922177',
//          'tomveiga@hero99.com.br' => '603628562252267922189',
//          'tuliokalaf@hero99.com.br' => '603628258942267922190',
//          'uriel@hero99.com.br' => '603628726592267922202',
//          'victor@hero99.com.br' => '603628222382267922211',
//
//        );

        $pessoas = array(
            'rafael@hero99.com.br' => '603628265382267922222',
            'rafaelkpedroso@gmail.com' => '603628187582267922104',
        );
        // reserva: 603628844992267922239

        foreach($pessoas as $destinatario => $chave){

            $name = 'Hero';
            $data = array("chave" => $chave);

            Mail::send("mail", $data, function($message) use ($name, $destinatario) {

                $message->to($destinatario)->subject("A firma quer te pagar um jantar!");
                $message->from("rafaelpedroso@hero99.com.br","Rafael K Pedroso");

            });
        }



        die();
    }
}
