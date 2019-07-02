<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Mail\ValidationMail;

use Mail;
use Auth;

class CandidatureController extends Controller {

    /* 
    TODO: Session Management 
    TODO: Links Protections

    public function index(Request $request) {

        $locale = $request->session()->get('locale');
        app()->setLocale($locale);

        if ($request->session()->exists('incorrectPassword')) {

            $request->session()->forget('incorrectPassword');
            return view('candidature')->with('incorrectPassword', 'true');
        
        } else if ($request->session()->exists('email')) {
            $request->session()->forget('incorrectPassword');

            $programmes = DB::table('programmes')->get();

            if ($request->session()->get('isRegisterd') == 'True') {

                $userID = $request->session()->get('userID');

                $etudiant = DB::table('etudiants')
                ->where('user_id', $userID)->first();

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

                return view('information', $data);
            }
            

        } else {

                $request->session()->forget('incorrectPassword');
                return view('candidature')->with('incorrectPassword', 'false');
        }

    }

    */

    public function index(Request $request) {

        $bacalaureats = DB::table('type_bacalaureats')->get();

        if ($request->session()->get('isConnected') == 'true') {

            $userID = $request->session()->get('userID');

            $user = DB::table('users')->where('user_id', $userID)->first();

            if ($request->session()->get('isRegistered') == 'false') {
                
                return view('stepper', 
                    [
                        'email' => $user->email,
                        'niveau' => '',
                        'nom' => '',
                        'prenom' => '',
                        'nom_ar' => '',
                        'prenom_ar' => '',
                        'cin' => '',
                        'ce' => '',
                        'date_naissance' => '',
                        'ville_naissance' => '',
                        'pays_naissance' => '',
                        'sexe' => '',
                        'pays_residence' => '',
                        'tel_1' => '',
                        'tel_2' => '',

                        'bacs' => $bacalaureats,

                        'academie_obtention' =>  '',

                        'hasNotes' => 'false',
                        'note_nationale' => '', 
                        'note_regionale' => '', 
                        'note_1' => '', 
                        'note_2' => '', 
                        'note_3' => '',
                    ]);

            } else if ($request->session()->get('isRegistered') == 'true') {
                
                $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

                $etudiantID = $etudiant->etudiant_id;

                if ($request->session()->get('Diploma') != '') {

                    $diplome = DB::table('diplomes')->where('etudiant_id', $etudiantID)->first();

                    $diplomeID = $diplome->diplome_id;

                    if ($request->session()->get('Diploma') == 'BAC') {

                        $bac = DB::table('bacalaureats')->where(['diplome_id' => $diplomeID])->first();

                        if ($request->session()->get('hasDocs') == 'true' && $request->session()->get('hasNotes') == 'true') {

                            $programmes = DB::table('programmes')->get();

                            return view('informations',
                            [
                                'email' => $user->email,
                                'niveau' => $etudiant->niveau_etude,
                                'nom' => $etudiant->nom,
                                'prenom' => $etudiant->prenom,
                                'nom_ar' => $etudiant->nom_ar,
                                'prenom_ar' => $etudiant->prenom_ar,
                                'cin' => $etudiant->cin,
                                'ce' => $etudiant->ce,
                                'date_naissance' => $etudiant->date_naissance,
                                'ville_naissance' => $etudiant->ville_naissance,
                                'pays_naissance' => $etudiant->pays_naissance,
                                'sexe' => $etudiant->sexe,
                                'pays_residence' => $etudiant->pays_residence,
                                'tel_1' => $etudiant->tel_1,
                                'tel_2' =>  $etudiant->tel_2,

                                'programmes' => $programmes,
                                
                                'bacs' => $bacalaureats,

                                'academie_obtention' =>  $diplome->academie_obtention,

                                'hasNotes' => 'true',

                                'type_bac_id'=> $bac->type_bacalaureat_id,
                                'note_nationale' => $bac->note_nationale, 
                                'note_regionale' => $bac->note_regionale, 
                                'note_1' => $bac->note_1, 
                                'note_2' => $bac->note_2, 
                                'note_3' => $bac->note_3,
                            ]
                        );

                        } else if ($request->session()->get('hasDocs') == 'false' && $request->session()->get('hasNotes') == 'true') {
                            
                            return view('stepper', 
                                [
                                    'email' => $user->email,
                                    'niveau' => $etudiant->niveau_etude,
                                    'nom' => $etudiant->nom,
                                    'prenom' => $etudiant->prenom,
                                    'nom_ar' => $etudiant->nom_ar,
                                    'prenom_ar' => $etudiant->prenom_ar,
                                    'cin' => $etudiant->cin,
                                    'ce' => $etudiant->ce,
                                    'date_naissance' => $etudiant->date_naissance,
                                    'ville_naissance' => $etudiant->ville_naissance,
                                    'pays_naissance' => $etudiant->pays_naissance,
                                    'sexe' => $etudiant->sexe,
                                    'pays_residence' => $etudiant->pays_residence,
                                    'tel_1' => $etudiant->tel_1,
                                    'tel_2' =>  $etudiant->tel_2,
    
                                    
                                    'bacs' => $bacalaureats,
    
                                    'academie_obtention' =>  $diplome->academie_obtention,
    
                                    'hasNotes' => 'true',
    
                                    'type_bac_id'=> $bac->type_bacalaureat_id,
                                    'note_nationale' => $bac->note_nationale, 
                                    'note_regionale' => $bac->note_regionale, 
                                    'note_1' => $bac->note_1, 
                                    'note_2' => $bac->note_2, 
                                    'note_3' => $bac->note_3,
                                ]
                            );
                        } else {

                            return view('stepper', 
                                [
                                    'email' => $user->email,
                                    'niveau' => $etudiant->niveau_etude,
                                    'nom' => $etudiant->nom,
                                    'prenom' => $etudiant->prenom,
                                    'nom_ar' => $etudiant->nom_ar,
                                    'prenom_ar' => $etudiant->prenom_ar,
                                    'cin' => $etudiant->cin,
                                    'ce' => $etudiant->ce,
                                    'date_naissance' => $etudiant->date_naissance,
                                    'ville_naissance' => $etudiant->ville_naissance,
                                    'pays_naissance' => $etudiant->pays_naissance,
                                    'sexe' => $etudiant->sexe,
                                    'pays_residence' => $etudiant->pays_residence,
                                    'tel_1' => $etudiant->tel_1,
                                    'tel_2' =>  $etudiant->tel_2,

                                    'bacs' => $bacalaureats,

                                    'academie_obtention' =>  '',

                                    'hasNotes' => 'false',
                                    'note_nationale' => '', 
                                    'note_regionale' => '', 
                                    'note_1' => '', 
                                    'note_2' => '', 
                                    'note_3' => '',
                                ]);

                        }

                    }

                } else {

                    return view('stepper', 
                    [
                        'email' => $user->email,
                        'niveau' => $etudiant->niveau_etude,
                        'nom' => $etudiant->nom,
                        'prenom' => $etudiant->prenom,
                        'nom_ar' => $etudiant->nom_ar,
                        'prenom_ar' => $etudiant->prenom_ar,
                        'cin' => $etudiant->cin,
                        'ce' => $etudiant->ce,
                        'date_naissance' => $etudiant->date_naissance,
                        'ville_naissance' => $etudiant->ville_naissance,
                        'pays_naissance' => $etudiant->pays_naissance,
                        'sexe' => $etudiant->sexe,
                        'pays_residence' => $etudiant->pays_residence,
                        'tel_1' => $etudiant->tel_1,
                        'tel_2' =>  $etudiant->tel_2,

                        'bacs' => $bacalaureats,

                        'academie_obtention' =>  '',

                        'hasNotes' => 'false',
                        'note_nationale' => '', 
                        'note_regionale' => '', 
                        'note_1' => '', 
                        'note_2' => '', 
                        'note_3' => '',
                    ]);
                    
                }

            }
            
        } else {
            return view('authentication');
        }
        
    }
    

    public function information(Request $request) {
        
        if ($request->session()->get('isConnected') == 'true') {

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
                    'carte_identite' => '',
                    'releve_notes' => '',
                ]
            );
    
            $request->session()->put('isRegistered', 'true');
        }

    }

    public function cursus(Request $request) {

        if ($request->session()->get('isConnected') == 'true') {

            $userID = $request->session()->get('userID');

            $input = $request->all();

            $etudiantID = DB::table('etudiants')->where('user_id', $userID)->value('etudiant_id');

            $diplome = DB::table('diplomes')->where('etudiant_id', $etudiantID)->first();

            if ($diplome == null) {

                $diplomeID = DB::table('diplomes')->insertGetId(
                    [   'etudiant_id' => $etudiantID,
                        
                        'type' => $input["type"],
                        
                        'annee_obtention' => $input["anneeAcademique"],
                        'academie_obtention' => $input["academie"],
                        
                        'diplome_doc' => '',
                    ]
                );

                if ($diplomeID != null) {

                    $MG = 0.25*$input["noteRegionale"]+0.75*$input["noteNationale"];

                    $bacID = DB::table('bacalaureats')->insertGetId(
                        [   'diplome_id' => $diplomeID,
                            
                            'moyenne_general' => $MG,

                            'type_bacalaureat_id' => $input["typeBac"],

                            'note_nationale' => $input["noteNationale"],
                            'note_regionale' => $input["noteRegionale"],

                            'note_1' => $input["noteMat1"],
                            'note_2' => $input["noteMat2"],
                            'note_3' => $input["noteMat3"],
                        ]
                    );

                    $request->session()->put('Diploma', 'BAC');

                }

            } else {

                $diplomeID = $diplome->diplome_id;

                DB::table('diplomes')->where(['etudiant_id' => $etudiantID])->update(
                    [   
                        'type' => $input["type"],
                        
                        'annee_obtention' => $input["anneeAcademique"],
                        'academie_obtention' => $input["academie"],
                        
                        'diplome_doc' => '',
                    ]
                );
                
                if ($diplome->type == 'BAC') {

                    $MG = 0.25*$input["noteRegionale"]+0.75*$input["noteNationale"];

                    $bacID = DB::table('bacalaureats')->where(['diplome_id' => $diplomeID])->update(
                        [                           
                            'moyenne_general' => $MG,
        
                            'type_bacalaureat_id' => $input["typeBac"],
        
                            'note_nationale' => $input["noteNationale"],
                            'note_regionale' => $input["noteRegionale"],
        
                            'note_1' => $input["noteMat1"],
                            'note_2' => $input["noteMat2"],
                            'note_3' => $input["noteMat3"],
                        ]
                    );

                    $request->session()->put('Diploma', 'BAC');

                }

            }

        }

    }

    // SIZE LIMIT
    // FORMAT (EXTENSION FILE)
    public function documents(Request $request) {

        if ($request->session()->get('isConnected') == 'true') {

            $allowedfileExtension = ['pdf','jpg','png','jpeg','PDF','JPG','PNG','JPEG'];

            $userID = $request->session()->get('userID');

            $input = $request->all();

            $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();

            $etudiantID = $etudiant->etudiant_id;

            $destinationPath = $etudiant->cin;

            $diplomeID;

            $request->session()->put('hasNotes', 'true');

            if ($request->hasFile('cin_password_file')) {

                $cinPasseportFile = $request->file('cin_password_file');

                $filename = $cinPasseportFile->getClientOriginalName();
                $extension = $cinPasseportFile->getClientOriginalExtension();
                
                $check = in_array($extension, $allowedfileExtension);

                if($check) {
                    
                    $path = Storage::putFileAs($destinationPath, $cinPasseportFile, $destinationPath.'_CIN_Passeport.'.$extension);

                    DB::table('etudiants')->where(['etudiant_id' => $etudiantID])->update(['carte_identite' => $path]);

                }

            }

            if ($request->hasFile('releve_notes_file')) {

                $releveFile = $request->file('releve_notes_file');

                $filename = $releveFile->getClientOriginalName();
                $extension = $releveFile->getClientOriginalExtension();
                
                $check = in_array($extension, $allowedfileExtension);

                if($check) {
                    
                    $path = Storage::putFileAs($destinationPath, $releveFile, $destinationPath.'_Releve_Notes.'.$extension);

                    DB::table('etudiants')->where(['etudiant_id' => $etudiantID])->update(['releve_notes' => $path]);

                }

            }

            if ($etudiant->niveau_etude == 'BAC') {

                $request->session()->put('Diploma', 'BAC');

                $diplome = DB::table('diplomes')->where([['etudiant_id', $etudiantID], ['type', 'BAC']])->first();

                $diplomeID = $diplome->diplome_id;

                if ($diplome != null) {

                    if ($request->hasFile('baccalaureat_file')) {

                        $baccalaureatFile = $request->file('baccalaureat_file');

                        $filename = $baccalaureatFile->getClientOriginalName();
                        $extension = $baccalaureatFile->getClientOriginalExtension();
                        
                        $check = in_array($extension,$allowedfileExtension);

                        if($check) {

                            $path = Storage::putFileAs(
                                $destinationPath, $baccalaureatFile, $destinationPath.'_Baccalaureat.'.$extension
                            );

                            DB::table('diplomes')->where(['diplome_id' => $diplomeID])->update(['diplome_doc' => $path]);

                        }

                    }

                } 

            } else {/* TO ADD METHOD FOR LIC, MAS, DOC Students */}

            $request->session()->put('hasDocs', 'true');

            return redirect('/candidature');

        }
        
    }




    

    public function candidature(Request $request) {
        
        if ($request->session()->get('isConnected') == 'true') {
            
            $input = $request->all();

            $userID = $request->session()->get('userID');

            $etudiant = DB::table('etudiants')->where('user_id', $userID)->first();



        }

    /*
        

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
    */

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

}
