<?php

namespace App\Http\Controllers;

use Auth;

use Mail;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller {

    
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
        } 

        if (Auth::attempt($credentials)) {

            $user = DB::table('users')->where('email', $email)->first();

            $userID = $user->user_id;
            
            $request->session()->put('userID', $userID);
            $request->session()->put('email', $email);

            // TODO: Email Verified

            $request->session()->put('isConnected', 'true');

            $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

            if ($etudiant != null) {
                $request->session()->put('isRegistered', 'true');

                $etudiantID = $etudiant->etudiant_id;

                $diplome = DB::table('diplomes')->where('etudiant_id', $etudiantID)->first();

                if ($diplome != null) {
                    
                    $request->session()->put('Diploma', $diplome->type);

                    if ($diplome->type == 'BAC') {

                        $bac = DB::table('bacalaureats')->where('diplome_id', $diplome->diplome_id)->first();

                        if ($bac) {

                            if ($bac->moyenne_general != null && $bac->note_1 != null && $bac->note_2 != null && $bac->note_3 != null) {
                                $request->session()->put('hasNotes', 'true');

                                if ($diplome->diplome_doc != null && $etudiant->carte_identite != null && $etudiant->releve_notes != null) {
                                    $request->session()->put('hasDocs', 'true');
                                } else {
                                    $request->session()->put('hasDocs', 'false');
                                }

                            } else {
                                $request->session()->put('hasNotes', 'false');
                            }
                        } else {
                            $request->session()->put('hasNotes', 'false');
                        }

                    } /* else if LIC || MAS || DOC {

                    } */

                } else {
                    $request->session()->put('Diploma', '');
                }

                return redirect('candidature');

            } else {
                
                $request->session()->put('isRegistered', 'false');
                return redirect('candidature');
            }

        } else {
            $request->session()->put('isConnected', 'false');
        }

    }

    // DONE
    public function register(Request $request) {

        $data = array('email_register' => $request->get('email_register'), 'email' => $request->get('email_register'), 'password_register' => $request->get('password_register'), 'password_confirmation' => $request->get('password_confirmation'));

        if ($data['password_register'] == $data['password_confirmation']) {
            
            User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password_register']),
            ]);

            $credentials = array('email' => $request->get('email_register'), 'password' => $request->get('password_register'));
    
            if (Auth::attempt($credentials)) {
    
                $email = $credentials['email'];
    
                $user = DB::table('users')->where('email', $email)->first();
    
                $userID = $user->user_id;
                    
                $request->session()->put('userID', $userID);
                $request->session()->put('email', $email);
    
                $request->session()->put('isConnected', 'true');
                $request->session()->put('isRegistered', 'false');
    
                return redirect('candidature');
    
            }
        } else {
            $request->session()->put('matchPassword', 'true');
            return redirect('candidature');
        }

    }

    // DONE
    public function logout(Request $request) {
        
        Auth::logout();
        
        $request->session()->flush();

        $locale = $request->session()->get('locale');
        $request->session()->put('locale', 'fr');

        app()->setLocale('fr');
        
        return redirect('candidature');
        
    }



}
