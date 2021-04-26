<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projectstages;
class ProjectstagesController extends Controller
{
              function save(Request $req){
  
    $tariffplanpromotors= new projectstages;
    $tariffplanpromotors->projectstage=$req->projectstage;
    $tariffplanpromotors->save();
    return  redirect('projectstages/ajouter')->with('success', 'plan tariff promotors  a été ajouté avec succès');

   }
      function edit(Request $req){
      
        $id=$req->id;
        $tariff=projectstages::find($id);
        $tariff->projectstage=$req->projectstage;
        $tariff->save();
         return  redirect('projectstages')->with('success', 'plan tariff agence  a été modifier avec succès');
   }
    function delete($id){
        $tariff=projectstages::find($id);
        $tariff->delete();
        return  redirect('projectstages')->with('success', 'plan tariff agence  a été supprimer avec succès');
   }
}
