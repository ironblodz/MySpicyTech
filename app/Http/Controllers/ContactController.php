<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

     * Metodo create retorna a visualização do formulário de contato
     */
    public function create()
    {
        return view('frontoffice.pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     * Metodo Store usado para tratar os dados enviados e guardar na base dados, mas antes de guardar, valida cada campo.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max: 9|regex:/^([0-9\s\-\+\(\)]*)$/',
        'subject' => 'required|string|max: 150',
        'message' => 'required|string|max: 550',
        ]);

        //Guardar dados na base dados
        Contact::create($request->all());

        //Enviar email através do mailtrap
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request){
            $message->from($request->email);
            $message-to('iamjoaoperes19@outlook.com', 'Admin'->subject($request->get('subject')));
        });
        return back()->with('success', 'O formulário foi enviado com sucesso');
        return view('frontoffice.pages.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
