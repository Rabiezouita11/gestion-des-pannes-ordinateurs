<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Laboratoire;
use App\Poste;

class IngenieurController extends Controller
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
         //compte ingenieur

    
     public function Ingenieur (){

        return view ('ingenieur.index');
    }
        public function compte (){

            return view ('ingenieur.account.index');
    }


    public function Affichemodifier(Request $request)
    {
         $id=$request['id'];
         $users=\App\User::find($id);
         return view('ingenieur.account.modifier',compact('users'));
    }

    public function Modifier(Request $request)
    {
         $id=$request['id'];
         $users=\App\User::find($id);
         $users->name=$request['name'];
         $users->email=$request['email'];
         $users->role=$request['role'];
         
      
if($request->hasFile('image')){
                $users->image=$request->image->store('profile');
            }
         $users->update();

          $users=\App\User::all();
         return redirect()->route('compte')->with('vert','le compte a bien été modifier');




}                                //enseignant
public function afficheenseignant(){

     $m = DB::table('users')->where('role', '=', 'enseignant')->paginate(2); 

    return view ('ingenieur.CRUD_enseignant.afficher',compact('m'));

}

public function supprimerEnseignant($id){
    
    
     $user=\App\User::find($id);
     $user->delete();
    
     return  redirect()->route('listeEnseignant')->with('success','enseignant a été supprimer avec succées!');
     }

     public function AjouterEnseignant(){
         return view ('ingenieur.CRUD_enseignant.ajouter');
     }


     public function AjoutEnseignant(Request $request)
     {
         $this->validate($request, [
 
             'name' => 'alpha|max:100',
             'email' => 'email|unique:users|max:1000',
             'password' => 'string|min:8',
 
             ]);
        $users = new \App\User();
          $users->name=$request['name'];
          $users->email=$request['email'];
          $users->role=$request['role'];

          $users->password=Hash::make($request['password']);
       
if($request->hasFile('image')){
    $users->image=$request->image->store('enseignant');
}
          $users->save();
 
          $users=\App\User::all();
          return redirect()->route('listeEnseignant',compact('users'))->with('ajoute',' enseignant a bien été ajouté');
        }


        public function search(){
            request()->validate([
             'r' => 'min:2'
            
            
            
            
            ]);
            
            
            
            $r = request()->input('r');
          
            $enseignant = \App\User::where('name','like',"%$r%")
                        ->orwhere('email','like',"%$r%")
                        ->paginate(1000000000);
                        return view('ingenieur.CRUD_enseignant.recherche.affiche_rechercher_enseig')->with('enseignant',$enseignant);
                    }
           

                                            //Technicien
            
public function affichetechnicien(){

    $m = DB::table('users')->where('role', '=', 'technicien')->paginate(4); 

   return view ('ingenieur.CRUD_technicien.affiche',compact('m'));

}

public function supprimerTechnicien($id){
   
   
    $user=\App\User::find($id);
    $user->delete();
   
    return  redirect()->route('listeTechnicien')->with('success','technicien a été supprimer avec succées!');
    }

    public function AjouterTechnicien(){
        return view ('ingenieur.CRUD_technicien.ajouter');
    }


    public function AjoutTechnicien(Request $request)
    {
        $this->validate($request, [

            'name' => 'alpha|max:100',
            'email' => 'email|unique:users|max:1000',
            'password' => 'string|min:8',

            ]);
       $users = new \App\User();
         $users->name=$request['name'];
         $users->email=$request['email'];
         $users->role=$request['role'];

         $users->password=Hash::make($request['password']);
      
if($request->hasFile('image')){
   $users->image=$request->image->store('technicien');
}
         $users->save();

         $users=\App\User::all();
         return redirect()->route('listeTechnicien',compact('users'))->with('ajoute',' technicien a bien été ajouté');
       }



                                    //laboratoire
            
        public function affichelaboratoire(){

            $mm = DB::table('laboratoires')->paginate(4); 
       
           return view ('ingenieur.CRUD_laboratoire.affiche',compact('mm'));
       
       }
       
       public function supprimerLaboratoire($id){
           
           
            $laboratoire=\App\Laboratoire::find($id);
            $laboratoire->delete();
           
            return  redirect()->route('listeLaboratoire')->with('success','laboratoire a été supprimer avec succées!');
            }
       
            public function AjouterLaboratoire(){
                return view ('ingenieur.CRUD_laboratoire.ajouter');
            }
       
       
            public function AjoutLaboratoire(Request $request)
            {
                $this->validate($request, [
        
                    'nom_labo' => 'string|unique:laboratoires|max:100',
                    
                    ]);
               $laboratoires = new \App\Laboratoire();
               $laboratoires->nom_labo=$request['nom_labo'];
                
              
       
                 $laboratoires->save();
        
                 $laboratoires=\App\Laboratoire::all();
                 return redirect()->route('listeLaboratoire',compact('laboratoires'))->with('ajoute',' laboratoire a bien été ajouté');
               }

               public function affichemodifierlaboratoire(Request $request){

                $id=$request['id'];
                $labo=\App\Laboratoire::find($id);
           
               return view ('ingenieur.CRUD_laboratoire.modifier',compact('labo'));

         }


         public function modifierlabo(Request $request)
         {
             
             
              $id=$request['id'];
              $labo=\App\Laboratoire::find($id);
              $labo->nom_labo=$request['nom_labo'];


              $labo->update();

              
              return redirect()->route('listeLaboratoire',compact('labo'))->with('modifie',' laboratoire a bien été modifié');

    }




 


                                    //POSTE
                                    

    public function affiche_poste($id){
       
        $labo = DB::table('laboratoires')->paginate(2); 
         
             return view('ingenieur.CRUD_poste.affiche_poste')->with('cat', Laboratoire::find($id))->with('labo',$labo);
     
         }
             
              public function Ajouterposte($id){

              return view ('ingenieur.CRUD_poste.ajouter')->with('tt', Laboratoire::find($id));
              }


             public function Ajoutposte(Request $request)
             {
                 $this->validate($request, [
         
                     'nom_poste' => 'string|unique:postes|max:100',
                     'model' => 'alpha|max:100',
         
                     ]);
                $postes = new \App\Poste();
                $postes->nom_poste=$request['nom_poste'];
                $postes->model=$request['model'];
                $postes->laboratoire_id=$request['laboratoire_id'];
         
                 
               
         
                  $postes->save();
         
          
                  return redirect()->back()->with('ajoutee',' poste a bien été ajouté');
                }


             public function affichemodifierposte(Request $request){

                $id=$request['id'];
                $pos=\App\Poste::find($id);
           
               return view ('ingenieur.CRUD_poste.modifier',compact('pos'));

         }


         public function modifierposte(Request $request)
         {
             
             
              $id=$request['id'];
              $pos=\App\Poste::find($id);
              $pos->nom_poste=$request['nom_poste'];
              $pos->model=$request['model'];


              $pos->update();

              
              return redirect()->route('listeLaboratoire',compact('pos'))->with('modifie',' Poste a bien été modifié');

    }
    public function supprimerposte($id){
           
           
        $poste=\App\Poste::find($id);
        $poste->delete();
       
        return  redirect()->back()->with('supp','poste a été supprimer avec succées!');
        }


   



                //peripherique

        
    public function affiche_perepherique($id){
    $labo = \App\Laboratoire::all();
     $post= \App\Poste::all();
                 
    return view('ingenieur.CRUD_peripherique.affiche_peripherique')->with('ppp', Poste::find($id))->with('labo',$labo)->with('post',$post);
             
             
    
    }
    


       public function Ajouterperipherique($id){
        
        
        
        return view ('ingenieur.CRUD_peripherique.ajouter')->with('peri', Poste::find($id));
     }


    public function Ajoutperipherique(Request $request)
    {
        $this->validate($request, [

            'type' => 'string|max:100',

            ]);
       $peripherique = new \App\Perepherique();
       $peripherique->type=$request['type'];
      
       $peripherique->poste_id=$request['poste_id'];
       if($request->hasFile('image')){
        $peripherique->image=$request->image->store('peripheriques');
    }
         $peripherique->save();

 
         return redirect()->back()->with('ajouteee',' peripherique a bien été ajouté');
       }


       public function affichemodifierperipherique(Request $request){

        $id=$request['id'];
        $periph=\App\Perepherique::find($id);
   
       return view ('ingenieur.CRUD_peripherique.modifier',compact('periph'));

 }


 public function modifierperipherique(Request $request)
 {
     
     
      $id=$request['id'];
      $periph=\App\Perepherique::find($id);
      $periph->type=$request['type'];
     
      if($request->hasFile('newphoto')){
        $periph->image=$request->newphoto->store('peripheriques');
    }

      $periph->update();

      
      return redirect()->back()->with('modifiee',' Peripherique a bien été modifié');

}
public function supprimerperipherique($id){
           
           
    $perepherique=\App\Perepherique::find($id);
    $perepherique->delete();
   
    return  redirect()->back()->with('supprim','poste a été supprimer avec succées!');
    }




  //changer mot de passe

  public function changemdp()
  {

return view ('ingenieur.account.mot_de_passe');

  }

  public function update_password(Request $request){
      $request->validate([
      'old_password'=>'required',
      'new_password'=>'required',
      'confirm_password'=>'required|same:new_password'
      ]);

      $current_user=auth()->user();

      if(Hash::check($request->old_password,$current_user->password)){

          $current_user->update([
              'password'=>bcrypt($request->new_password)
          ]);

          return redirect()->back()->with('success','Mot de passe bien modifié.');

      }else{
          return redirect()->back()->with('error','Ancien mot de passe incorrect.');
      }
  }



              
public function historique(){

    $hist = \App\Historique::paginate(4);
    $periph = \App\Perepherique::all();
   return view ('ingenieur.Historique.historique',compact('hist','periph'));

}




public function stat(){

   
$enseignant = DB::table('users')->where('role', '=', 'enseignant')->count(); 

$technicien = DB::table('users')->where('role', '=', 'technicien')->count(); 

$labo = DB::table('laboratoires')->count();
$postes = DB::table('postes')->count();
$peripherique = DB::table('perepheriques')->count();
$panne = DB::table('perepheriques')->where('etat', '=', 'panne')->count(); 
$pan = DB::table('perepheriques')->where('etat', '=', 'actif')->count(); 
$hist = DB::table('historiques')->count();

return view('ingenieur.statistiques.index',compact('enseignant' ,'technicien', 'labo', 'postes','peripherique','panne','pan','hist'));

}





}























