<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\clients;
use App\Models\images;



class fichierController extends Controller
{
    public function index(){

        return view('content.upload');
    }


  public  function base64ToImage($base64String) {
    // Séparer les données de l'image
    $i = explode('base64,', $base64String);
    $i = end($i);

    // Remplacer les espaces par des '+'
    $i = str_replace(' ', '+', $i);

    // Générer un nom de fichier unique
    $file = "images/". uniqid(). '.png';

    // Stocker l'image décodée dans le disque public
    Storage::disk('public')->put($file, base64_decode($i));

    // Retourner le chemin du fichier
    return $file;
}

   

    public function posts(Request $request){

       
              //Storage::disk('local')->put('example.text', 'Ok');
       //$file=Storage::disk('local')->put('avatars', $request->file('avatar'));
      //dd(Storage::get($file));
     //return Storage::download($file);
     //$request->validate([ ' avatar' =>'required',  ]);

 //-----------------code-et-stocke-dans-la-BD---------//
     //$file=$request->file('avatar');
     //$img=  base64_encode(file_get_contents($file));
     $Image=new images();


     
    
    
     //$path = Storage::path($file);
    // $Image->image = $img;


     //$image->pathImage = $request->avatar;
     //$Image->save();
//--------------------------------------------------//

     $img64=$Image::find(11);

     $base64String=$img64->image;


     $i = explode('base64,', $base64String);
    $i = end($i);

    // Remplacer les espaces par des '+'
    $i = str_replace(' ', '+', $i);

    // Générer un nom de fichier unique
    $file1 = "images/". '1'. '.png';

    // Stocker l'image décodée dans le disque public
    Storage::disk('public')->put($file1, base64_decode($i));

    // Retourner le chemin du fichier
     
    dd($file1);

     
     //$image =  base64_decode($img64->image);
     //Storage::disk('local')->put('avatars', $image);


    //Storage::download($image );

     //dd($image);
      //$filename=time() .'.'. $request->file('avatar')->extension();
     //dd($request->file('avatar')->storeAs('avatars',$filename ));
        

       return view('content.upload',compact('image'));

    }
}
