<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datatable', 'datatableController@index')->name('datatable');
Route::get('/deconnexion', 'HomeController@deconnexion');


Route::group([],function(){
  Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
   Route::get('agence',function(){
   	    $agence=DB::table('agency')->get();
          if(!empty($agence)){
        for ($i=0; $i <count($agence) ; $i++) { 
          $utili[$i]=DB::table('agencyusers')->where('agency_id',$agence[$i]->id)->count();
        }
        }else{
        $utili='';
        }
        
   		return view('agence/default', compact('agence','utili'));
   });
   Route::get('agence/{id}',function($id){
   	    $agenc=DB::table('agency')->where('id',$id)->first();
   		return view('agence/detail', compact('agenc'));
   });
    Route::get('agence/user/{id}',function($id){
        $age=DB::table('agencyusers')->where('agency_id',$id)->get();
      return view('agence/user', compact('age'));
   });
    Route::get('promotors',function(){
   	    $promotors=DB::table('promotors')->get();
        if(!empty($promotors)){
         for ($i=0; $i <count($promotors) ; $i++) { 
          $utili[$i]=DB::table('promusers')->where('prom_id',$promotors[$i]->id)->count();
        }
        }else{
        $utili='';
        }
       
   		return view('promotors/default', compact('promotors','utili'));
   });
   Route::get('promotors/{id}',function($id){
   	    $promotor=DB::table('promotors')->where('id',$id)->first();
   		return view('promotors/detail', compact('promotor'));
   });
   Route::get('promotors/user/{id}',function($id){
        $promo=DB::table('promusers')->where('prom_id',$id)->get();
      return view('promotors/user', compact('promo'));
   });

   Route::get('tariffagency',function(){
        $tariffagency=DB::table('tariffplanagency')->get();
      return view('tariffagency/default', compact('tariffagency'));
   });
   Route::get('tariffpromotors',function(){
        $tariffpromotors=DB::table('tariffplanpromotors')->get();
      return view('tariffpromotors/default', compact('tariffpromotors'));
   });
     Route::get('tariffpromotors/ajouter',function(){
      return view('tariffpromotors/ajouter');
   });
   Route::get('tariffagency/ajouter',function(){
      return view('tariffagency/ajouter');
   });

   Route::post('ajoutertariff', 'TariffagenceController@save');
   Route::post('edittariff', 'TariffagenceController@edit');
   Route::get('tariffpromotors/delete/{id}', 'TariffagenceController@delete');

   Route::post('ajouteagence', 'TariffController@save');
   Route::post('editagence', 'TariffController@edit');
   Route::get('tariffagency/delete/{id}', 'TariffController@delete');

   Route::get('tariffpromotors/edit/{id}',function($id){
        $promo=DB::table('tariffplanpromotors')->where('id',$id)->get();
      return view('tariffpromotors/edit', compact('promo'));
   });
   Route::get('tariffagency/edit/{id}',function($id){
        $promo=DB::table('tariffplanagency')->where('id',$id)->get();
      return view('tariffagency/edit', compact('promo'));
   });
   //**********************************PROJET***********************************************
    Route::get('projet', 'PropertyController@projet');
    Route::get('projet/show/{id}', 'PropertyController@projetshow');
    Route::get('projet/propertydelete/{id}', 'PropertyController@propertydelete');

 
     Route::get('projet/property/{id}', 'PropertyController@index');
    Route::get('projet/propertyshow/{id}', 'PropertyController@show');

     Route::post('ajouteagence', 'TariffController@save');
});
  //**********************************propertystatus***********************************************
   Route::get('propertystatus',function(){
        $tariffagency=DB::table('propertystatus')->get();
      return view('propertystatus/default', compact('tariffagency'));
   });
   Route::get('propertystatus/ajouter',function(){
        $tariffagency=DB::table('propertystatus')->get();
      return view('propertystatus/ajouter', compact('tariffagency'));
   });
     Route::get('propertystatus/edit/{id}',function($id){
       $promo=DB::table('propertystatus')->where('id',$id)->get();
      return view('propertystatus/edit', compact('promo'));
   });
   Route::post('ajoutestatus', 'StatusController@save');
   Route::post('editstatus', 'StatusController@edit');
   Route::get('propertystatus/delete/{id}', 'StatusController@delete');
     //**********************************propertytypes***********************************************
   Route::get('propertytypes',function(){
        $tariffagency=DB::table('propertytypes')->get();
      return view('propertytypes/default', compact('tariffagency'));
   });
   Route::get('propertytypes/ajouter',function(){
        $tariffagency=DB::table('propertytypes')->get();
      return view('propertytypes/ajouter', compact('tariffagency'));
   });
     Route::get('propertytypes/edit/{id}',function($id){
       $promo=DB::table('propertytypes')->where('id',$id)->get();
      return view('propertytypes/edit', compact('promo'));
   });
   Route::post('ajoutetypes', 'TypesController@save');
   Route::post('edittypes', 'TypesController@edit');
   Route::get('propertytypes/delete/{id}', 'TypesController@delete');
    //**********************************apptypes***********************************************
   Route::get('apptypes',function(){
        $tariffagency=DB::table('apptypes')->get();
      return view('apptypes/default', compact('tariffagency'));
   });
   Route::get('apptypes/ajouter',function(){
        $tariffagency=DB::table('apptypes')->get();
      return view('apptypes/ajouter', compact('tariffagency'));
   });
     Route::get('apptypes/edit/{id}',function($id){
       $promo=DB::table('apptypes')->where('id',$id)->get();
      return view('apptypes/edit', compact('promo'));
   });
   Route::post('ajouteapptypes', 'ApptypesController@save');
   Route::post('editapptypes', 'ApptypesController@edit');
   Route::get('apptypes/delete/{id}', 'ApptypesController@delete');
    //**********************************projectstages***********************************************
   Route::get('projectstages',function(){
        $tariffagency=DB::table('projectstages')->get();
      return view('projectstages/default', compact('tariffagency'));
   });
   Route::get('projectstages/ajouter',function(){
        $tariffagency=DB::table('projectstages')->get();
      return view('projectstages/ajouter', compact('tariffagency'));
   });
     Route::get('projectstages/edit/{id}',function($id){
       $promo=DB::table('projectstages')->where('id',$id)->get();
      return view('projectstages/edit', compact('promo'));
   });
   Route::post('ajouteprojectstages', 'ProjectstagesController@save');
   Route::post('editprojectstages', 'ProjectstagesController@edit');
   Route::get('projectstages/delete/{id}', 'ProjectstagesController@delete');
     //**********************************projectstatus***********************************************
   Route::get('projectstatus',function(){
        $tariffagency=DB::table('projectstatus')->get();
      return view('projectstatus/default', compact('tariffagency'));
   });
   Route::get('projectstatus/ajouter',function(){
        $tariffagency=DB::table('projectstatus')->get();
      return view('projectstatus/ajouter', compact('tariffagency'));
   });
     Route::get('projectstatus/edit/{id}',function($id){
       $promo=DB::table('projectstatus')->where('id',$id)->get();
      return view('projectstatus/edit', compact('promo'));
   });
   Route::post('ajouteprojectstatus', 'ProjectstatusController@save');
   Route::post('editprojectstatus', 'ProjectstatusController@edit');
   Route::get('projectstatus/delete/{id}', 'ProjectstatusController@delete');