<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\types;
class TypesController extends Controller
{
      function save(Request $req){
  
    $tariffplanpromotors= new types;
    $tariffplanpromotors->propertytype=$req->propertytype;
    $tariffplanpromotors->save();
    return  redirect('propertytypes/ajouter')->with('success', 'plan tariff promotors  a été ajouté avec succès');

   }
      function edit(Request $req){
      
        $id=$req->id;
        $tariff=types::find($id);
        $tariff->propertytype=$req->propertytype;
        $tariff->save();
         return  redirect('propertytypes')->with('success', 'plan tariff agence  a été modifier avec succès');
   }
    function delete($id){
        $tariff=types::find($id);
        $tariff->delete();
        return  redirect('propertytypes')->with('success', 'plan tariff agence  a été supprimer avec succès');
   }
}
