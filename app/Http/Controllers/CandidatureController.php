<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Mail\ValidationMail;

use Mail;
use Auth;

class CandidatureController extends Controller {

    // TODO: Session Management 
    // TODO: Links Protections

    public function index(Request $request) {

        $locale = $request->session()->get('locale');

        app()->setLocale($locale);

        if ($request->session()->exists('email')) {

            $data = array('email' => $request->session()->get('email'));
            
            return View('information', $data);
            
        } else {
            return View('candidature');
        }

    }

    // Register methods ! 

    protected function createUser(array $data) {
        User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password_register']),
        ]);
    }
    
    public function register(Request $request) {

        $user = array('email_register' => $request->get('email_register'), 'email' => $request->get('email_register'), 'password_register' => $request->get('password_register'), 'password_confirmation' => $request->get('password_confirmation'));

        // TODO: Validator must be fixed ASAP
        // $validator = Validator::make($user, [
        //     //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     //'email_register' => ['required', 'string', 'email', 'max:255'],
        //     //'password_register' => ['required', 'string', 'min:8', 'confirmed'],
        //     //'password_confirmation' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        // if ($validator->fails()) {
            // return redirect('candidature')->withErrors($validator)->withInput();
        // } else {

        $this->createUser($user);

        $credentials = array('email' => $request->get('email_register'), 'password' => $request->get('password_register'));

        if (Auth::attempt($credentials)) {

            $email = $credentials['email'];

            $request->session()->put('email', $email);

            Mail::to($email)->send(new ValidationMail());

            return redirect('candidature');
        }
        

    }

    
    // Login

    public function login(Request $request) {

        $email = $request->get('email');
        $password = $request->get('password');
        
        $credentials = array('email' => $email, 'password' => $password);

        $validator = Validator::make($credentials, [
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
        
            return redirect('candidature')->withErrors($validator)->withInput();
        
        } else {

            // attempt method return true if the authentication was successful, false if it fails.
            if (Auth::attempt($credentials)) {

                // TODO: Get user informations.

                $user = DB::table('users')->where('email', $email)->first();

                $userID = $user->user_id;
                
                $request->session()->put('userID', $userID);
                $request->session()->put('email', $email);

                $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

                if ($etudiant == null) {
                    $request->session()->put('isRegisterd', 'False');
                } else {

                    $request->session()->put('isRegisterd', 'True');

                    $request->session()->put('etudiant', $etudiant);

                }

                return redirect('candidature');

            } else {

                
            }
        }

    }

    public function information(Request $request) {
        
        $input = $request->all();

        $msg = $input["dateNaissance"];

        return response()->json(['success'=> $msg]);
    }

    // Logout

    public function logout(Request $request) {
        
        Auth::logout();
        
        $request->session()->flush();

        $locale = $request->session()->get('locale');
        $request->session()->put('locale', 'fr');

        app()->setLocale('fr');
        
        return redirect('candidature');
        
    }
    
}
