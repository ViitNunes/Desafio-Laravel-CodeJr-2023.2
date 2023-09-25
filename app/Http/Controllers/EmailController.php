<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailParaProprietario; 


class EmailController extends Controller
{

    public $assunto;
    public $mensagem;

    public function index()
    {
        return view('email.via_Email');
    }

    public function store(Request $request)
    {
        $owners = Owner::all();
        $assunto = $request->assunto;
        $mensagem = $request->mensagem;
        $email = new EmailParaProprietario($assunto, $mensagem);
        
        foreach($owners as $index => $owner){
            $multiplicador = $index + 1;
            $when = now()->addSeconds($multiplicador * 5);
            Mail::to($owner)->later($when, $email);
        }

       return view('email.via_Email');
    }
}