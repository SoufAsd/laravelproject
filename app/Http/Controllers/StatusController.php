<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;

class StatusController extends Controller
{
   function save(Request $req){
  
    $tariffplanpromotors= new status;
    $tariffplanpromotors->propertystatus=$req->propertystatus;
    $tariffplanpromotors->save();
    return  redirect('propertystatus/ajouter')->with('success', 'plan tariff promotors  a été ajouté avec succès');

   }
      function edit(Request $req){
      
        $id=$req->id;
        $tariff=status::find($id);
        $tariff->propertystatus=$req->propertystatus;
        $tariff->save();
         return  redirect('propertystatus')->with('success', 'plan tariff agence  a été modifier avec succès');
   }
    function delete($id){
        $tariff=status::find($id);
        $tariff->delete();
        return  redirect('propertystatus')->with('success', 'plan tariff agence  a été supprimer avec succès');
   }
}
