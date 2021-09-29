<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratoire;
use App\Poste;
use DB;
use App\Perepherique;

class IndexController extends Controller
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



    //  page enseignant
    public function affiche(){
        $labo = \App\Laboratoire::all();
        $notif = DB::table('perepheriques')->where('technicien', '!=', '')->count();
        $tt =  Perepherique::with('poste')->where('technicien', '!=', '')->get();

return view('enseignant.index1', compact('labo','notif','tt'));


    }
  


   public function affiche_poste($id){
   $labo = \App\Laboratoire::all();
   $post= \App\Poste::all();
   $notif = DB::table('perepheriques')->where('technicien', '!=', '')->count();
   $tt =  Perepherique::with('poste')->where('technicien', '!=', '')->get();
        return view('enseignant.affiche_poste')->with('cat', Laboratoire::find($id))->with('labo',$labo)->with('post',$post)->with('tt',$tt)->with('notif',$notif);
    }


    public function affiche_perepherique($id){
        $labo = \App\Laboratoire::all();
        $post= \App\Poste::all();
        $notif = DB::table('perepheriques')->where('technicien', '!=', '')->count();
        $tt =  Perepherique::with('poste')->where('technicien', '!=', '')->get();
        return view('enseignant.affiche_perepherique')->with('ppp', Poste::find($id))->with('labo',$labo)->with('post',$post)->with('tt',$tt)->with('notif',$notif);
    }




    public function panne(Request $request)
        { 
              $id=$request['id'];
              $periph=\App\Perepherique::find($id);
              $periph->etat=$request['etat'];
              $periph->nom_labo	=$request['nom_labo'];
              $periph->date_panne=$request['date'];
              $periph->technicien=$request['technicien'];
              $periph->Nom_enseignant=$request['Nom_enseignant'];


              
              $periph->update();
        
             
              
             return redirect()->back()->with('modifiee',' Votre panne a été bien enregistreé');
        
        }

}
