<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laboratoire;
use App\Poste;
class DirecteurController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

 
    public function Directeur (){

        return view ('directeur.index');
        
    
    }



                                    //laboratoire
            
        public function affiche_labo(){

            $mm = DB::table('laboratoires')->paginate(4); 
       
           return view ('directeur.labo',compact('mm'));
       
       }
       public function affiche_poste($id){
       
        $labo = DB::table('laboratoires')->paginate(2); 
         
             return view('directeur.poste')->with('cat', Laboratoire::find($id))->with('labo',$labo);
     
         }

         public function affiche_peripherique($id){
            $labo = \App\Laboratoire::all();
             $post= \App\Poste::all();
                         
            return view('directeur.peripherique')->with('ppp', Poste::find($id))->with('labo',$labo)->with('post',$post);
                     
                     
            
            }





         public function historique(){

            $hist = \App\Historique::paginate(4);
            $periph = \App\Perepherique::all();
           return view ('directeur.historique',compact('hist','periph'));
        
        }
    
        public function statistique(){

   
            $enseignant = DB::table('users')->where('role', '=', 'enseignant')->count(); 
            
            $technicien = DB::table('users')->where('role', '=', 'technicien')->count(); 
            
            $labo = DB::table('laboratoires')->count();
            $postes = DB::table('postes')->count();
            $peripherique = DB::table('perepheriques')->count();
            $panne = DB::table('perepheriques')->where('etat', '=', 'panne')->count(); 
            $pan = DB::table('perepheriques')->where('etat', '=', 'actif')->count(); 
            $hist = DB::table('historiques')->count();
            
            return view('directeur.statistique',compact('enseignant' ,'technicien', 'labo', 'postes','peripherique','panne','pan','hist'));
            
            }

   //affichage liste commentaires 
   public function avis()
   {
       $users=\App\User::all();
       $feedback=\App\Feedback::paginate(3);
   
       return view('directeur.avis',compact('users','feedback'));
   
   
   }


}
