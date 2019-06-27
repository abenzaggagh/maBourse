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

            $programmes = DB::table('programmes')->get();

            if ($request->session()->get('isRegisterd') == 'True') {

                $userID = $request->session()->get('userID');

                $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

                $diplome = DB::table('diplomes')
                ->where('etudiant_id', $etudiant->etudiant_id)->first();

                if ($diplome == null) {

                    $data = array(

                        'alreadyRegistered' => TRUE,
                        'alreadyHasNotes' => FALSE,
                        
                        'niveau' => $etudiant->niveau_etude,
                        'nom' => $etudiant->nom,
                        'prenom' => $etudiant->prenom,
                        'nom_ar' => $etudiant->nom_ar,
                        'prenom_ar' => $etudiant->prenom_ar,
                        'cin' => $etudiant->cin,
                        'ce' => $etudiant->ce,
                        'sexe' => $etudiant->sexe,
                        'dateNaissance' => $etudiant->date_naissance,
                        'villeNaissance' => $etudiant->ville_naissance,
                        'paysNaissance' => $etudiant->pays_naissance,
                        'email' => $request->session()->get('email'),
                        'tel_1' => $etudiant->tel_1,
                        'tel_2' => $etudiant->tel_2,
                        
                        
                        'programmes' => $programmes,

                    );

                    return View('information', $data);

                } else {

                    if ($diplome->type == 'BAC') {

                        $bac = DB::table('bacalaureats')
                        ->join('type_bacalaureats', 'bacalaureats.type_bacalaureat_id', '=', 'type_bacalaureats.type_bacalaureat_id')
                        ->where('diplome_id', $diplome->diplome_id)->first();

                        $dip = DB::table('diplomes')
                        ->where('etudiant_id', $etudiant->etudiant_id)->first();

                        $data = array(

                            'alreadyRegistered' => TRUE,
                            'alreadyHasNotes' => TRUE,
                            
                            'niveau' => $etudiant->niveau_etude,
                            'nom' => $etudiant->nom,
                            'prenom' => $etudiant->prenom,
                            'nom_ar' => $etudiant->nom_ar,
                            'prenom_ar' => $etudiant->prenom_ar,
                            'cin' => $etudiant->cin,
                            'ce' => $etudiant->ce,
                            'sexe' => $etudiant->sexe,
                            'dateNaissance' => $etudiant->date_naissance,
                            'villeNaissance' => $etudiant->ville_naissance,
                            'paysNaissance' => $etudiant->pays_naissance,
                            'email' => $request->session()->get('email'),
                            'tel_1' => $etudiant->tel_1,
                            'tel_2' => $etudiant->tel_2,
                            
                            'programmes' => $programmes,
                            'dip' => $dip,
                            'bac' => $bac,
                        );

                    }

                    return View('information', $data);
                }
                
                

            } else {

                $data = array(

                    'alreadyRegistered' => FALSE,
                    'alreadyHasNotes' => FALSE,
                        
                    'niveau' => '',
                    'nom' => '',
                    'prenom' => '',
                    'nom_ar' => '',
                    'prenom_ar' => '',
                    'cin' => '',
                    'ce' => '',
                    'sexe' => '',
                    'dateNaissance' => '',
                    'villeNaissance' => '',
                    'paysNaissance' => '',
                    'email' => $request->session()->get('email'),
                    'tel_1' => '',
                    'tel_2' => '',

                    'programmes' => $programmes,

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

                    $diplome = DB::table('diplomes')->where('etudiant_id', $etudiant->etudiant_id)->first();

                    if ($diplome == null) {

                        $request->session()->put('hasNotes', 'False');

                    } else {

                        $request->session()->put('hasNotes', 'True');

                    }

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
                'user_id' => $userID,
                'niveau_etude' => $input["niveau"],
                
                'nom' => $input["nom"],
                'prenom' => $input["prenom"],
                'nom_ar' => $input["nom_ar"],
                'prenom_ar' => $input["prenom_ar"],
                'cin' => $input["cin"],
                'ce' => $input["ce"],
                'date_naissance' => $input["dateNaissance"],
                'ville_naissance' => $input["villeNaissance"],
                'pays_naissance' => $input["paysNaissance"],
                'sexe' => $input["sexe"],
                'pays_residence' => $input["paysNaissance"],
                'tel_1' => $input["telephone_1"],
                'tel_2' => $input["telephone_2"],
            ]
        );

        $request->session()->put('isRegisterd', 'True');

    }

    public function disciplinesByProgrammeID($programme_id) {
        $disciplines = DB::table('disciplines')->where('programme_id', $programme_id)->get();
        return json_encode($disciplines);
    }


    public function disciplines($discipline_id) {

        $disciplines = DB::table('disciplines')
            ->join('discipline_bac', 'disciplines.discipline_id', '=', 'discipline_bac.discipline_id')
            ->join('type_bacalaureats', 'type_bacalaureats.type_bacalaureat_id', '=', 'discipline_bac.type_bacalaureat_id')
            ->where('disciplines.discipline_id', $discipline_id)
            ->get();

        return json_encode($disciplines);
    }
    

    public function typeBacalaureats($type_bac_id) {
        $disciplines = DB::table('type_bacalaureats')->where('type_bacalaureat_id', $type_bac_id)->get();
        return json_encode($disciplines);
    }

    public function candidature(Request $request) {

        $input = $request->all();

        $userID = $request->session()->get('userID');

        $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

        // TODO: Verify if 
        $diplomeID = DB::table('diplomes')->insertGetId(
            [   'etudiant_id' => $etudiant->etudiant_id,
                'academie_obtention' => $input["academique"],
                'annee_obtention' => $input["anneeAcademique"],
                'type' => 'BAC',
            ]
        );

        if ($diplomeID != null) {

            $MG = 0.25*$input["noteRegionale"]+0.75*$input["noteNationale"];

            $bacID = DB::table('bacalaureats')->insertGetId(
                [   'diplome_id' => $diplomeID,
                    
                    'moyenne_general' => $MG,

                    'type_bacalaureat_id' => $input["typeBacID"],

                    'note_nationale' => $input["noteNationale"],
                    'note_regionale' => $input["noteRegionale"],

                    'note_1' => $input["noteMat1"],
                    'note_2' => $input["noteMat2"],
                    'note_3' => $input["noteMat3"],
                ]
            );

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

            $user = DB::table('users')->where('email', $email)->first();

            $userID = $user->user_id;
                
            $request->session()->put('userID', $userID);
            $request->session()->put('email', $email);

            // Mail::to($email)->send(new ValidationMail());

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
