<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// login
Auth::routes();




                         /*  compte technicien */
// page acceuill
route::get('/technicien','TechnicienController@technicien')->name('technicien')->middleware('role:technicien');

// affiche panne
route::get('/affiche_panne','TechnicienController@affiche_panne')->name('affiche_panne')->middleware('role:technicien');

// button corriger le panne
route::post('/corrige','TechnicienController@corrige')->name('corrige')->middleware('role:technicien');
// page affiche commentaire
route::get('/commentaire','TechnicienController@commentaire')->name('commentaire')->middleware('role:technicien');
// button supprimer commentaire
route::get('/supprimercommentaire/{id}','TechnicienController@supprimercommentaire')->name('supprimercommentaire')->middleware('role:technicien');


                         /* compte  enseignant */

route::get('/declaration','IndexController@affiche')->name('declaration')->middleware('role:enseignant');
//affiche les poste qui appartient a leur labo
Route::get('/labo_{id}', 'IndexController@affiche_poste')->name('labo')->middleware('role:enseignant');
//affiche les perepherique qui appartient a leur post
Route::get('/poste_{id}', 'IndexController@affiche_perepherique')->name('poste')->middleware('role:enseignant');
                    
// button ajouter panne
route::post('/panne','IndexController@panne')->name('panne')->middleware('role:enseignant');



                  /*  compte ingenieur */

  route::get('/ingenieur','IngenieurController@Ingenieur')->name('ingenieur')->middleware('role:ingénieur');


// affiche liste des enseignant
route::get('/listeEnseignant','IngenieurController@afficheenseignant')->name('listeEnseignant')->middleware('role:ingénieur');
//button supprimer enseignant
route::get('/SupprimerEnseignant/{id}','IngenieurController@supprimerEnseignant')->name('SupprimerEnseignant')->middleware('role:ingénieur');
//formulaire ajouter enseignant
route::get('/AjouterEnseignant','IngenieurController@AjouterEnseignant')->name('AjouterEnseignant')->middleware('role:ingénieur');
//button ajouterenseignant
route::post('/AjoutEnseignant','IngenieurController@AjoutEnseignant')->name('AjoutEnseignant')->middleware('role:ingénieur');
// button recherche enseignant
Route::get('/recherche','IngenieurController@search')->name('recherche');



// affiche liste des Technicien
route::get('/listeTechnicien','IngenieurController@afficheTechnicien')->name('listeTechnicien')->middleware('role:ingénieur');
//button supprimer Technicien
route::get('/Supprimer/{id}','IngenieurController@supprimerTechnicien')->name('SupprimerTechnicien')->middleware('role:ingénieur');
//formulaire ajouter Technicien
route::get('/AjouterTechnicien','IngenieurController@AjouterTechnicien')->name('AjouterTechnicien')->middleware('role:ingénieur');
//button ajouter Technicien
route::post('/AjoutTechnicien','IngenieurController@AjoutTechnicien')->name('AjoutTechnicien')->middleware('role:ingénieur');


// affiche liste des Laboratoire
route::get('/listeLaboratoire','IngenieurController@afficheLaboratoire')->name('listeLaboratoire')->middleware('role:ingénieur');
//button supprimer Laboratoire
route::get('/SupprimerLaboratoire/{id}','IngenieurController@supprimerLaboratoire')->name('SupprimerLaboratoire')->middleware('role:ingénieur');
//formulaire ajouter Laboratoire
route::get('/AjouterLaboratoire','IngenieurController@AjouterLaboratoire')->name('AjouterLaboratoire')->middleware('role:ingénieur');
//button ajouter Laboratoire
route::post('/AjoutLaboratoire','IngenieurController@AjoutLaboratoire')->name('AjoutLaboratoire')->middleware('role:ingénieur');
//page modifier labo
route::get('/modifierlaboratoire/{id}','IngenieurController@affichemodifierlaboratoire')->name('x')->middleware('role:ingénieur');
// button modifier labo
route::post('/laboratoire','IngenieurController@modifierlabo')->name('w')->middleware('role:ingénieur');


// affiche liste des postes
route::get('/listePoste_{id}','IngenieurController@affiche_poste')->name('listePoste')->middleware('role:ingénieur');
//button supprimer poste
route::get('/Supprimerposte/{id}','IngenieurController@supprimerposte')->name('Supprimerposte')->middleware('role:ingénieur');
 

//page ajout poste
route::get('/affiche_ajout_poste_{id}','IngenieurController@Ajouterposte')->name('affiche_ajout_poste')->middleware('role:ingénieur');
//button ajouter poste
route::post('/Ajoutposte','IngenieurController@Ajoutposte')->name('Ajoutposte')->middleware('role:ingénieur');
//page modifier poste
route::get('/modifier_poste/{id}','IngenieurController@affichemodifierposte')->name('modif_poste')->middleware('role:ingénieur');
// button modifier poste
route::post('/modifierposte','IngenieurController@modifierposte')->name('modifierposte')->middleware('role:ingénieur');



// affiche liste peripheriques
Route::get('/peripherique_{id}', 'IngenieurController@affiche_perepherique')->name('peripherique')->middleware('role:ingénieur');
//page ajout peripheriques
route::get('/affiche_ajout_peripherique_{id}','IngenieurController@Ajouterperipherique')->name('affiche_ajout_peripherique')->middleware('role:ingénieur');
//button ajouter peripheriques
route::post('/Ajoutperipherique','IngenieurController@Ajoutperipherique')->name('Ajoutperipherique')->middleware('role:ingénieur');
//page modifier peripheriques
route::get('/modifier_peripherique/{id}','IngenieurController@affichemodifierperipherique')->name('modif_peripherique')->middleware('role:ingénieur');
// button modifier peripheriques
route::post('/modifierperipherique','IngenieurController@modifierperipherique')->name('modifierperipherique')->middleware('role:ingénieur');
//button supprimer peripheriques
route::get('/Supprimerperipherique/{id}','IngenieurController@supprimerperipherique')->name('Supprimerperipherique')->middleware('role:ingénieur');
 



// modifier profile
route::get('/compte/{id}','IngenieurController@Affichemodifier')->name('modifiercompte');


// button modifier profiles
Route::POST('/profile',[
    'uses' => 'IngenieurController@Modifier',
    'as' => 'profile'
]);
//page changer mot de passe
route::get('/chnager_mdp','IngenieurController@changemdp')->name('chnager_mdp');
// button changer mot de passe
Route::post('/update-password','IngenieurController@update_password')->name('update_password');	

// page affiche historique
Route::get('/historique', 'IngenieurController@historique')->name('historique')->middleware('role:ingénieur');




//page affiche compte 
Route::get('/compte', [App\Http\Controllers\IngenieurController::class, 'compte'])->name('compte');

// page stat 
Route::get('/stat', 'IngenieurController@stat')->name('stat')->middleware('role:ingénieur');





                           /*   Directeur */
route::get('/directeur','DirecteurController@directeur')->name('directeur')->middleware('role:directeur');

route::get('/listeLabo','DirecteurController@affiche_Labo')->name('listeLabo')->middleware('role:directeur');
route::get('/liste_Poste_{id}','DirecteurController@affiche_poste')->name('liste_Poste')->middleware('role:directeur');
Route::get('/histor', 'DirecteurController@historique')->name('histor')->middleware('role:directeur');
route::get('/liste_perif_{id}','DirecteurController@affiche_peripherique')->name('liste_perif')->middleware('role:directeur');
route::get('/statistique','DirecteurController@statistique')->name('statistique')->middleware('role:directeur');
route::get('/avis','DirecteurController@avis')->name('avis')->middleware('role:directeur');

