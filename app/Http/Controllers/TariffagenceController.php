<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tariffplanpromotors;

class TariffagenceController extends Controller
{
   function save(Request $req){
  
    $tariffplanpromotors= new tariffplanpromotors;
    $tariffplanpromotors->name=$req->name;
    $tariffplanpromotors->amount=$req->amount;
    $tariffplanpromotors->max_users=$req->max_users;
    $tariffplanpromotors->user_supp_price=$req->user_supp_price;
    $tariffplanpromotors->max_actif_projetc=$req->max_actif_projetc;
    $tariffplanpromotors->max_actif_items=$req->max_actif_items;
    $tariffplanpromotors->diff_property_amount=$req->diff_property_amount;
    $tariffplanpromotors->report_stat_marche=$req->report_stat_marche;
    $tariffplanpromotors->report_stat_promotor=$req->report_stat_promotor;
    $tariffplanpromotors->archived_properties=$req->archived_properties;
    $tariffplanpromotors->relex=$req->relex;
    $tariffplanpromotors->import=$req->import;
    $tariffplanpromotors->log_report=$req->log_report;
    $tariffplanpromotors->duration=$req->duration;
    $tariffplanpromotors->save();
    return  redirect('tariffpromotors/ajouter')->with('success', 'plan tariff promotors  a été ajouté avec succès');

   }
   function edit(Request $req){
      
        $id=$req->id;
        $tariff=tariffplanpromotors::find($id);
        $tariff->name=$req->name;
        $tariff->amount=$req->amount;
        $tariff->max_users=$req->max_users;
        $tariff->user_supp_price=$req->user_supp_price;
        $tariff->max_actif_projetc=$req->max_actif_projetc;
        $tariff->max_actif_items=$req->max_actif_items;
        $tariff->diff_property_amount=$req->diff_property_amount;
        $tariff->report_stat_marche=$req->report_stat_marche;
        $tariff->report_stat_promotor=$req->report_stat_promotor;
        $tariff->archived_properties=$req->archived_properties;
        $tariff->relex=$req->relex;
        $tariff->import=$req->import;
        $tariff->log_report=$req->log_report;
        $tariff->duration=$req->duration;
        $tariff->save();
         return  redirect('tariffpromotors')->with('success', 'plan tariff promotors  a été modifier avec succès');
   }

   function delete($id){
        $tariff=tariffplanpromotors::find($id);
        $tariff->delete();
        return  redirect('tariffpromotors')->with('success', 'plan tariff promotors  a été supprimer avec succès');
   }
}
