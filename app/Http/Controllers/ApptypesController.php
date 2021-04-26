<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apptypes;
class ApptypesController extends Controller
{
          function save(Request $req){
  
    $tariffplanpromotors= new apptypes;
    $tariffplanpromotors->apptype=$req->apptype;
    $tariffplanpromotors->save();
    return  redirect('apptypes/ajouter')->with('success', 'plan tariff promotors  a été ajouté avec succès');

   }
      function edit(Request $req){
      
        $id=$req->id;
        $tariff=apptypes::find($id);
        $tariff->apptype=$req->apptype;
        $tariff->save();
         return  redirect('apptypes')->with('success', 'plan tariff agence  a été modifier avec succès');
   }
    function delete($id){
        $tariff=apptypes::find($id);
        $tariff->delete();
        return  redirect('apptypes')->with('success', 'plan tariff agence  a été supprimer avec succès');
   }
}
