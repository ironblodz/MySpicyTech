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

        ini_set('allow_url_fopen', true);

        session_cache_limiter('nocache');


        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

            // Your Google reCAPTCHA generated Secret Key here
            $secret = '6Lc8ivkjAAAAAGTlg8oUFda7J_ickhIfTMZsh4_Y';

            if( ini_get('allow_url_fopen') ) {
                //reCAPTCHA - Using file_get_contents()
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                $responseData = json_decode($verifyResponse);
            } else if( function_exists('curl_version') ) {
                // reCAPTCHA - Using CURL
                $fields = array(
                    'secret'    =>  $secret,
                    'response'  =>  $_POST['g-recaptcha-response'],
                    'remoteip'  =>  $_SERVER['REMOTE_ADDR']
                );

                $verifyResponse = curl_init("https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($verifyResponse, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($verifyResponse, CURLOPT_TIMEOUT, 15);
                curl_setopt($verifyResponse, CURLOPT_POSTFIELDS, http_build_query($fields));
                $responseData = json_decode(curl_exec($verifyResponse));
                curl_close($verifyResponse);
            } else {
                $arrResult = array ('response'=>'error','errorMessage'=>'É necessário ter o CURL ou file_get_contents() ativado no seu servidor. Entre em contato com o seu host para ativar..');
                echo json_encode($arrResult);
                die();
            }

            if($responseData->success) {

                //Passo 1 - Digite seu endereço de e-mail abaixo.
                $email = 'exemplodeemail@gmail.com';

                //Se o e-mail não estiver a funcionar, altere a opção de depuração para 2 | $depuração = 2;
                $debug = 0;

                //Se o formulário de contato não tiver a entrada do assunto, altere o valor do assunto aqui

                $subject = ( isset($_POST['subject']) ) ? $_POST['subject'] : 'Define subject in php/contact-form-recaptcha.php line 62';

                $message = '';

                foreach($_POST as $label => $value) {
                    if( $label != 'g-recaptcha-response' ) {
                        $label = ucwords($label);


                        // Use o código comentado abaixo para alterar os textos dos rótulos. Neste exemplo, mudará "Email" para "Endereço de e-mail"

                        // if( $label == 'Email' ) {
                        // 	$label = 'Email Address';
                        // }

                        // Checkboxes
                        if( is_array($value) ) {
                            // Armazena o novo valor
                            $value = implode(', ', $value);
                        }

                        $message .= $label.": " . nl2br(htmlspecialchars($value, ENT_QUOTES)) . "<br>";
                    }
                }

                $mail = new PHPMailer(true);

                try {

                    $mail->SMTPDebug = $debug;                                 // Debug Mode


                    // Passo 2 (Opcional) - Caso não receba o e-mail, tente configurar os parâmetros abaixo:

                    $mail = new PHPMailer();
                    $mail->IsSMTP();                                        // Configura o mailer para usar SMTP
                    $mail->Host = 'smtp.mailtrap.io';                    // Especificar servidor principal e de backup
                    $mail->SMTPAuth = true;                                  // Habilitar a autenticação SMTP
                    $mail->Username = 'aab39e36e2cf78';                    // SMTP nome
                    $mail->Password = '020f5e85197700';                              // SMTP senha
                    $mail->SMTPSecure = 'tls';                               // Ativa a criptografia, 'ssl' também é aceito
                    $mail->Port = 2525;   								       //Porta TCP para se conectar

                    $mail->AddAddress($email);	 						       //Adicionar outro destinatário

                    //$mail->AddAddress('person2@domain.com', 'Person 2');     //Adicionar um segundo destinatário
                    //$mail->AddCC('person3@domain.com', 'Person 3');          //Adicionar um endereço CC
                    //$mail->AddBCC('person4@domain.com', 'Person 4');         // Adicionar um endereço BCC

                    // De - Nome
                    $fromName = ( isset($_POST['name']) ) ? $_POST['name'] : 'Website User';
                    $mail->SetFrom($email, $fromName);

                    // Responder a
                    if( isset($_POST['email']) && !empty($_POST['email']) ) {
                        $mail->AddReplyTo($_POST['email'], $fromName);
                    }

                    $mail->IsHTML(true);                                  // Definir o formator de email para html

                    $mail->CharSet = 'UTF-8';

                    $mail->Subject = $subject;
                    $mail->Body    = $message;

                    $mail->Send();
                    $arrResult = array ('response'=>'success');

                } catch (Exception $e) {
                    $arrResult = array ('response'=>'error','errorMessage'=>$e->errorMessage());
                } catch (\Exception $e) {
                    $arrResult = array ('response'=>'error','errorMessage'=>$e->getMessage());
                }

                if ($debug == 0) {
                    echo json_encode($arrResult);
                }

            } else {
                $arrResult = array ('response'=>'error','errorMessage'=>'reCaptcha Error: Verifcation failed (no success). Please contact the website administrator.');
                echo json_encode($arrResult);
            }

        } else {
            $arrResult = array ('response'=>'error','errorMessage'=>'reCaptcha Error: Invalid token. Please contact the website administrator.');
            echo json_encode($arrResult);
        }

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
        'surname' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:9',
        'subject' => 'required|string|max: 150',
        'message' => 'required|string|max: 550',
        ]);

        //Guardar dados na base dados
        Contact::create($request->all());

        //Enviar email através do mailtrap
        //Método request para validar cada campo
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'surname' => $request-get('surname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function ($message) use ($request){
            $message->from($request->email);
            $message-to('naylestorm12@gmail.com', 'Admin'->subject($request->get('subject')));
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
