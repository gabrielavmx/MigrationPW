<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\greg_user;

class ContatoController extends Controller
{
    public function contato(Request $request) 
    {
        if($request==NULL){
            return view('contato', ['titulo' => 'Contato(teste)']);
        }
        $User = new greg_user;
        $User->username=$request->username;
        $User->email=$request->email;
        $User->tel=$request->tel;
        $User->motive=$request->motive;
        $User->dob=$request->dob;
        $User->save();
        return view('contato', ['titulo' => 'Contato(teste)']);
    }
}
