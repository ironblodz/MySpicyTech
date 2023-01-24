<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Mail;

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

        return view('frontoffice.pages.contact','frontoffice.recaptcha.recaptcha-v3');
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
        'surname' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:9',
        'subject' => 'required|string|max: 150',
        'message' => 'required|string|max: 550',
        ]);

        //Guardar dados na base dados
        Contact::create($request->all());

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
