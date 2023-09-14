<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Services\EmailService;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
    use RegistersUsers;
    protected $emailService;

 
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $validator = $this->validator($request->validated());

        if ($validator->fails() || !$request->has('agree_terms')) {
            return redirect()->back()
                ->withErrors($validator->errors()->merge(['agree_terms' => 'Vous devez accepter les conditions d\'utilisation pour vous inscrire.']))
                ->withInput();
        }

        $user = User::create($request->validated());
        
        $this -> sendVerificationEmail($user);

        auth()->login($user);

        return view('check-your-email');

    }
    protected function validator(array $data)
{
    return Validator::make($data, [
        'password' => [
            'required',
            'string',
            'confirmed',
            'min:8', 
            'regex:/^(?=.*[A-Z])(?=.*\d).+$/',
        ],
        'agree_terms' => ['accepted', 'required'], // Assurez-vous que la case est cochée (valeur '1')
    ], [
        'password.regex' => 'doit contenir au moins une lettre majuscule et un chiffre, avec une longueur minimale de 8 caractères.',
        'agree_terms.accepted' => 'Vous devez accepter les conditions d\'utilisation pour vous inscrire.',
        'agree_terms.required' => 'Vous devez accepter les conditions d\'utilisation pour vous inscrire.',
    ]);
}

    protected function sendVerificationEmail ($user)
    {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            // Configure SMTP settings (SMTP host, port, authentication, etc.)
            $mail->Host = 'smtp.googlemail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'alidaassmae@gmail.com';
            $mail->Password = 'zdlgnhcjwwhbyrek';
             // Recipients
             $mail->setFrom('alidaassmae@gmail.com', 'assma');
             $mail->addAddress($user->email, $user->name);
             $user->update(['email_verified_at' => now()]);

             // Content
             $mail->isHTML(true);
             $mail->Subject = 'Account Verification';
             $verificationLink = route('verification.verify', ['id' => $user->id, 'hash' => sha1($user->email)]);
             $mail->Body = 'Please click the following link to verify your account: <a href="' . $verificationLink . '">' . $verificationLink . '</a>';
             $mail->send();

         } catch (Exception $e) {
               echo 'errooooooorat';
        }

    }
}
