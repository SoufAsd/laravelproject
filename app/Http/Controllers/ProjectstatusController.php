<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projectstatus;
class ProjectstatusController extends Controller
{
    function save(Request $req){
  
    $tariffplanpromotors= new projectstatus;
    $tariffplanpromotors->projectstatus=$req->projectstatus;
    $tariffplanpromotors->save();
    return  redirect('projectstatus/ajouter')->with('success', 'plan tariff promotors  a été ajouté avec succès');

   }
      function edit(Request $req){
      
        $id=$req->id;
        $tariff=projectstatus::find($id);
        $tariff->projectstatus=$req->projectstatus;
        $tariff->save();
         return  redirect('projectstatus')->with('success', 'plan tariff agence  a été modifier avec succès');
   }
    function delete($id){
        $tariff=projectstatus::find($id);
        $tariff->delete();
        return  redirect('projectstatus')->with('success', 'plan tariff agence  a été supprimer avec succès');
   }
}
