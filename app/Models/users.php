<?php

namespace App\Models;
namespace App\Models\donnees;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class users extends Model
{
    
    
        public $id;
        public $name;
        public $telephone;
        public $email;
        public $verificationEmail;
        public $motDepasse;
    
        public function __construct($id, $name, $telephone, $email, $verificationEmail, $motDepasse)
        {
           
            
            $this->id = $id;
            $this->name = $name;
            $this->telephone = $telephone;
            $this->email = $email;
            $this->verificationEmail = $verificationEmail;
            $this->motDepasse = $motDepasse;

                        
        }

        //----Creation_de_Utilisateur-----//

        public function CreateUsers(){

            $user=new users($id, $name, $telephone, $email, $verificationEmail, $motDepasse);

            $user=new users();
            $user->name= $id;
            $user->telephone=$telephone;
            $user->email=$email;
            $user->email_verified_at=$verificationEmail;
            $user->password=$motDepasse;

            $user-> save();

        }

        //-----Methode_Chargement_Donnees-----//
        public function UploadImage(){

            $donnee= new donnees();
            $donnee->name= $name; 
            $donnee->type_donnees= $type_donees; 
            $donnee->id_users= $id_users; 

            $donnee->save();
           
        }
        
        public function UploadAudio(){

            $donnee= new donnees();
            $donnee->name= $name; 
            $donnee->type_donnees= $type_donees; 
            $donnee->id_users= $id_users; 

            $donnee->save();
            
        } 

        public function UploadDocument($name, $type_donees,$id_users){

            $donnee= new donnees();
            $donnee->name= $name; 
            $donnee->type_donnees= $type_donees; 
            $donnee->id_users= $id_users; 

            $donnee->save();
            
        } 

        public function UploadSMS(){

            $donnee= new donnees();
            $donnee->name= $name; 
            $donnee->type_donnees= $type_donees; 
            $donnee->id_users= $id_users; 

            $donnee->save();
            
        } 

        //------- Methode_suppression_donnees-----//

        public function DeleteSMS(){
            
        } 

        public function DeleteAudio(){
            
        }

        public function DeleteDocument(){
            
        }

        public function DeleteImqge(){
            
        }

        
        
        



    }
