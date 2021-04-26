<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tariffplanagency;

class TariffController extends Controller
{
     function save(Request $req){
  
    $tariffplanagency= new tariffplanagency;
    $tariffplanagency->name=$req->name;
    $tariffplanagency->amount=$req->amount;
    $tariffplanagency->max_users=$req->max_users;
    $tariffplanagency->ref_exclusif=$req->ref_exclusif;
    $tariffplanagency->relexprovincelocale=$req->relexprovincelocale;
    $tariffplanagency->relexprovincesupp=$req->relexprovincesupp;
    $tariffplanagency->reportstatmarche=$req->reportstatmarche;
    $tariffplanagency->reportstatproperty=$req->reportstatproperty;
    $tariffplanagency->export=$req->export;
    $tariffplanagency->logreport=$req->logreport;
    $tariffplanagency->duration=$req->duration;
    $tariffplanagency->save();
    return  redirect('tariffagency/ajouter')->with('success', 'plan tariff agence  a été ajouté avec succès');

   }
   function edit(Request $req){
      
        $id=$req->id;
        $tariff=tariffplanagency::find($id);
        $tariff->name=$req->name;
        $tariff->amount=$req->amount;
        $tariff->max_users=$req->max_users;
        $tariff->ref_exclusif=$req->ref_exclusif;
        $tariff->relexprovincelocale=$req->relexprovincelocale;
        $tariff->relexprovincesupp=$req->relexprovincesupp;
        $tariff->reportstatmarche=$req->reportstatmarche;
        $tariff->reportstatproperty=$req->reportstatproperty;
        $tariff->export=$req->export;
        $tariff->logreport=$req->logreport;
        $tariff->duration=$req->duration;
        $tariff->save();
         return  redirect('tariffagency')->with('success', 'plan tariff agence  a été modifier avec succès');
   }

   function delete($id){
        $tariff=tariffplanagency::find($id);
        $tariff->delete();
        return  redirect('tariffagency')->with('success', 'plan tariff agence  a été supprimer avec succès');
   }
}
