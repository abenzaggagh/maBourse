<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use Auth;

class CandidatureController extends Controller {

    // TODO: Session management and Links protections

    public function index() {
        return View('candidature');
    }

    public function information() {
        return View('information');
    }

    // Register methods

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
               return redirect('candidature-1');
            }
        // }

    }

    
    // Login methods

    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        // $validator = Validator::make($credentials, [
        //     'email' => ['required', 'string', 'email'],
        //     'password' => ['required', 'string', 'min:8'],
        // ]);

        // if ($validator->fails()) {
            // return redirect('candidature')->withErrors($validator)->withInput();
        // } else {
            if (Auth::attempt($credentials)) {
                return redirect('candidature-1');
            } else {
             //   return redirect('candidature')->withErrors($validator)->withInput();
            }
        // } 

    }

    public function logout() {
        Auth::logout();
        return redirect('candidature');
    }
    
}
