<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model {

}
$utilisateur = new App\Utilisateur;
$utilisateur->Name = request('nom_inscription');
$utilisateur->Surname= request('prenom_inscription');
$utilisateur->Password_Confirmation= request('password_inscription');
$utilisateur->Mail = request('email_inscription');
$utilisateur->Password= request('password_inscription');
$utilisateur->Localisation= request('localisation_inscription');
$utilisateur->User= request('user');
$utilisateur->save();
?>