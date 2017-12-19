<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function formConnexion(Request $pseudo,Request $mdp)
    {
    	$data['pseudo'] = $pseudo->input('pseudo');
    	$data['mdp'] = $mdmp->input('password');
        return view('v_actionAdmin',$data);
    }
 
}
