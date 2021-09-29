<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Perepherique;

class TechnicienController extends Controller
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


    
    public function Technicien (){
        $notif = DB::table('perepheriques')->where('etat', '=', 'panne')->count();
        $bb = Perepherique::with('poste')->where('etat', '=', 'panne')->get(); 
        $tt = Perepherique::with('poste')->where('etat', '=', 'panne')->get(); 
        return view ('technicien.index',compact('notif','bb','tt'));
        
     
    }

    public function affiche_panne()
    {
        $tt = Perepherique::with('poste')->where('etat', '=', 'panne')->get(); 

        $bb = Perepherique::with('poste')->where('etat', '=', 'panne')->paginate(4); 
        $notif = DB::table('perepheriques')->where('etat', '=', 'panne')->count();
return view('technicien.affiche_panne',compact('bb','notif','tt'));
}


public function corrige(Request $request)
{ 
      $id=$request['id'];
      $periph=\App\Perepherique::find($id);
      $periph->etat=$request['etat'];
      $periph->technicien=$request['nom_technicien'];
      $periph->updated_at=$request['date'];

      $periph->update();

      $hist = new \App\Historique();
              $hist->type=$request['type_hist'];
              $hist->etat=$request['etat_hist'];
              $hist->nom_labo=$request['nom_labo_hist'];
              $hist->nom_post=$request['nom_post_hist'];
              $hist->date_panne=$request['date_panne_hist'];
              $hist->nom_enseignant=$request['nom_enseignant_hist'];
              $hist->Nom_technicien=$request['Nom_technicien_hist'];
              $hist->date_reparation=$request['date_reparation'];
              
              $hist->save();
     

     return redirect()->back()->with('modifiee','la panne a été bien corrigée');

}
   //affichage liste commentaires 
public function commentaire()
{
    $users=\App\User::all();
    $feedback=\App\Feedback::paginate(3);

    return view('technicien.commentaires',compact('users','feedback'));


}


public function supprimercommentaire($id){
           
           
    $com=\App\Feedback::find($id);
    $com->delete();
   
    return  redirect()->back()->with('supprim','le message a été supprimer avec succées!');
    }



















































}






