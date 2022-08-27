<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmail;
use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(StoreEmail $request)
    {

        $email = new Email($request->all());
        Mail::to('destinatario@test.com')->send($email);

        return redirect()->route('contacto.index')->with('info', 'Mensaje enviado con exito');
    }
}
