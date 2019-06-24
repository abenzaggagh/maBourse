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

            if ($request->session()->get('isRegisterd') == 'True') {

                $userID = $request->session()->get('userID');

                $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

                $data = array(
                    'alreadyRegistered' => TRUE,
                    'email' => $request->session()->get('email'),
                    'niveau' => $etudiant->niveau_etude,
                    'nom' => $etudiant->nom,
                    'prenom' => $etudiant->prenom,
                    'cin' => $etudiant->cin,
                    'ce' => $etudiant->ce,
                    'sexe' => $etudiant->sexe,
                );

                return View('information', $data);

            } else {

                $data = array(
                    'alreadyRegistered' => FALSE,
                    'email' => $request->session()->get('email'),
                    'niveau' => 'BACHELIER',
                    'nom' => '',
                    'prenom' => '',
                    'cin' => '',
                    'ce' => '',
                    'sexe' => '',
                );

                return View('information', $data);
            }
            
            
            
        } else {
            return View('candidature');
        }

    }


    
    // Login

    public function login(Request $request) {

        $email = $request->get('email');
        $password = $request->get('password');
        
        $credentials = array(
            'email' => $email, 
            'password' => $password
        );

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
                }

                return redirect('candidature');

            } else {

                
            }
        }

    }

    public function information(Request $request) {
        
        $userID = $request->session()->get('userID');

        $input = $request->all();

        DB::table('etudiants')->updateOrInsert(
            ['user_id' => $userID],
            [
                'niveau_etude' => $input["niveau"],
                'user_id' => $userID,
                'nom' => $input["nom"],
                'prenom' => $input["prenom"],
                'cin' => $input["cin"],
                'ce' => $input["ce"],
                'date_naissance' => $input["dateNaissance"],
                'ville_naissance' => $input["villeNaissance"],
                'pays_naissance' => $input["paysNaissance"],
                'sexe' => $input["sexe"],
                'pays_residence' => $input["paysNaissance"], // TODO Add a new input
                'telephone_1' => $input["telephone_1"],
                'telephone_2' => $input["telephone_2"],
            ]
        );

        $request->session()->put('isRegisterd', 'True');

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

            $user = DB::table('users')->where('email', $email)->first();

            $userID = $user->user_id;
                
            $request->session()->put('userID', $userID);
            $request->session()->put('email', $email);

            Mail::to($email)->send(new ValidationMail());

            return redirect('candidature');

        }
        

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
