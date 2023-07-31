<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    //
    public function contato(Request $request){
        /*echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');*/
        /*$contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();*/

        /*$contato = new SiteContato();
        $contato->fill($request->all());
        print_r($contato->getAttributes());
        $contato->save();*/

        $contato = new SiteContato();
        $contato->create($request->all());
        return view('site.contato', ['titulo' => 'Contato']);
    }
}
