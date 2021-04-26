<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PropertyController extends Controller
{
     function index($id){
        $data= DB::table('property')
             ->join('propertystatus','propertystatus.id','=','property.propertystatus_id')
             ->join('propertytypes','propertytypes.id','=','property.property_type')
             ->join('promusers','promusers.id','=','property.responsible') 
             ->where('property.project_id','=',$id)
             ->select('property.*','propertystatus.*','propertytypes.*','promusers.*','property.id as pro_id')
             ->get();
             
             return view('projet/property', compact('data'));

     }	

     function show($id){
     	 $data= DB::table('property')
             ->join('propertystatus','propertystatus.id','=','property.propertystatus_id')
             ->join('propertytypes','propertytypes.id','=','property.property_type')
             ->join('promusers','promusers.id','=','property.responsible') 
             ->join('parkingtypes','parkingtypes.id','=','property.parking_type') 
             ->join('apptypes','apptypes.id','=','property.app_type')
             ->where('property.id','=',$id)
             ->select('property.*','propertystatus.*','propertytypes.*','promusers.*','parkingtypes.*','apptypes.*','property.id as pro_id')
             ->get();
             $terrace=json_decode($data[0]->terrace_orientation,true);
             $view=json_decode($data[0]->terrace_view,true);
             $sq_sleeproom=json_decode($data[0]->sq_sleeproom,true);
             $sq_bathroom=json_decode($data[0]->sq_bathroom,true);
             return view('projet/propertyshow', compact('data','terrace','view','sq_sleeproom','sq_bathroom'));
     }

    function projet(){

             $projects=DB::table('projects')->get();
        for ($i=0; $i <count($projects) ; $i++) { 
          $data[$i]= DB::table('property')
             ->join('propertystatus','propertystatus.id','=','property.propertystatus_id')
             ->join('propertytypes','propertytypes.id','=','property.property_type')
             ->join('promusers','promusers.id','=','property.responsible') 
             ->select("property.id as numbre")
             ->where('property.project_id','=',$projects[$i]->id)
             ->get();
             $var[$i]=count($data[$i]);
        }
          
      return view('projet/default', compact('projects'),compact('var'));
    }

    function projetshow($id){
        $promo=DB::table('projects')->where('id',$id)->get();
        $status=DB::table('projectstatus')->where('id',$promo[0]->projectstatus)->get();
        $stage=DB::table('projectstages')->where('id',$promo[0]->projectstage)->get();
        $projpmtconditions=DB::table('projpmtconditions')->where('id',$promo[0]->projpmtconditions)->get();
        $promusers=DB::table('promusers')->where('id',$promo[0]->responsible)->get();
        $partage=json_decode($promo[0]->listuserpromid,true);
        if(!empty($partage)){
           for ($i=0; $i <count($partage) ; $i++) { 
          $partageuser[$i]=DB::table('promusers')->where('id',$partage[$i])->first();
        }
        }else{
        $partageuser='';
        }
        

             $a=DB::table('projectseller')
             ->join('agency','agency.id','=','projectseller.seller_id')
             ->select('projectseller.*','agency.name as name')
             ->where('projectseller.project_id','=',$id)
             ->get();
             $b=DB::table('projectseller')
             ->join('promotors','promotors.id','=','projectseller.seller_id')
             ->select('projectseller.*','promotors.trade_name as name')
             ->where('projectseller.project_id','=',$id)
             ->get();
             $result = $a->merge($b);
            
         return view('projet/show', compact('promo','status','stage','projpmtconditions','promusers','partageuser','result'));
    }

      function deleteprojet($id){
               DB::table('projects')->where('id', $id)->delete();
        return  redirect('projet')->with('success', 'plan tariff promotors  a été supprimer avec succès');
   }

     function propertydelete($id){
               DB::table('property')->where('id', $id)->delete();
        return  redirect('projet')->with('success', 'plan tariff promotors  a été supprimer avec succès');
   }

}
