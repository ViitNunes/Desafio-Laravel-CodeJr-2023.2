<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailParaProprietario; 


class EmailController extends Controller
{
    public function index()
    {
        return view('mail.via_Email');
    }

    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string',
        ]);

        $owners = Owner::all();
        foreach ($owners as $indice => $owner) {
            $multiplicador = $indice + 1;
            $when = now()->addSecond($multiplicador * 20);
            Mail::to($owner->email)->later($when, new \App\Mail\EmailParaProprietario($request->assunto, $request->mensagem));
        }

        return redirect()->route('email.store')->with('success', 'E-mails enviados com sucesso para todos os proprietários.');
    }
}

