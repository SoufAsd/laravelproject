@extends('layouts.admin')
@section('content')
@foreach($promo as $promo)

 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
	                <div class="card">
	                  <div class="card-header">
	                  	<h4>Détails Projet</h4>
	                  	<div class="badge badge-warning" style="position: absolute;right: 9px;">{{$promo->complete_percentage}} %</div>
	                  </div>
	                  <div class="card-body">
	                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Nom Projet 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->projectname}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Code Postal
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->postalcode}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Localité
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->locality}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Adresse
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->streetadress}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Latitude
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->latitude}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Longitude
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->longitud}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Email
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->mail_proj}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Site Web
	                        </span>
	                        <span class="float-right text-muted">
	                          <a href="{{$promo->site_proj}}">{{$promo->site_proj}}</a>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Téléphone
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->tel_proj}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Risponsible
	                        </span>
	                        <span class="float-right text-muted">
	                          @foreach($promusers as $promusers)
	                          {{$promusers->last_name}} {{$promusers->first_name}}
							  @endforeach
	                        </span>
	                      </p>
	                    </div>
	                  </div>
	                  <div class="card-footer">
	           
	                  </div>
	                </div>
              </div>
              <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"></h4>
                  </div>
                  <div class="card-body">
	                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          availability 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->availability}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          date de création 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->creationdate}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          l'état du projet 
	                        </span>
	                        <span class="float-right text-muted">
	                          @foreach($status as $status)
	                          {{$status->projectstatus}}
							  @endforeach
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          étape du projet 
	                        </span>
	                        <span class="float-right text-muted">
	                          @foreach($stage as $stage)
	                          {{$stage->projectstage}}
							  @endforeach
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         conditions de paiement
	                        </span>
	                        <span class="float-right text-muted">
	                          @foreach($projpmtconditions as $projpmtconditions)
	                          {{$projpmtconditions->projpmtcondition}}
							  @endforeach
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                           Partagé avec
	                        </span>
	                        <span class="float-right text-muted">
	                        	<?php  if (!empty($partageuser)) {
	                        		
	                        	 ?>
	                          @foreach($partageuser as $partageuser)
	                           {{$partageuser->last_name}} {{$partageuser->first_name}}<br>
							  @endforeach
							<?php  }
	                        		
	                        	 ?>
	                        </span>
	                      </p>
	                       <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">type seller</th>
                          <th scope="col">Trad  name</th>
                          <th scope="col">relex</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($result as $result)
                      	<tr>
                      		<td>{{$result->type_seller}}</td>
                      		<td>{{$result->name}}</td>
                      		<td><?php  if ($result->relex==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?></td>
                      		
                      	</tr>
                      	@endforeach  
                      </tbody>
                    </table>
	                    </div>
	                  </div>
                </div>
              </div>
            </div>

            <h2 class="section-title">Description</h2>
             <div class="row">
             	 <div class="col-12 col-md-12 col-lg-12">
		                <div class="card">
		                  <div class="card-body">
		                  	{{$promo->description}}
			               </div>
		                </div>
              </div>
             </div>
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
                  <div class="card card-primary">
	                  <div class="card-header">
	                    <h4>situation(KM)
	                    	<code> <?php if (!empty($promo->situation_percentage)) {
	                    		echo $promo->situation_percentage;echo "%";
	                    	} ?></code></h4>
	                  </div>
	                  <div class="card-body">
	                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Train 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_train}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Creche 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_creche}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          école primaire 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_primschool}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         école secondaire
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_secschool}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Métro
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_metro}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Autres transports
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_othertransports}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Commerce 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_commerce}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Sport 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_sportplace}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Voiture partagée
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_sharedcars}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Hôpital 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->near_hospital}}
	                        </span>
	                      </p>
	                    </div>
	                  </div>
                  </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h4>Confort
                <code> <?php if (!empty($promo->comfort_percentage)) {
	                    		echo $promo->comfort_percentage;echo "%";
	                    	} ?></code></h4>
                  </div>
                  <div class="card-body">
                   <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          isol acoustic 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->comfort_acousticisolation}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Chaufage 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->comfort_eatingenergy}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Airco 
	                        </span>
	                        <span class="float-right text-muted"> 
	                         <?php  if ($promo->comfort_airconditionned==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Rainwater
	                        </span>
	                        <span class="float-right text-muted">
	                            <?php  if ($promo->comfort_rainwater==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Domatique
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->comfort_domotic==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         ParkVoitEIndiv
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->comfort_individualelectricalterminal==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Porte Blindée 
	                        </span>
	                        <span class="float-right text-muted">
	                            <?php  if ($promo->comfort_reinforceddoor==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-danger">
                  <div class="card-header">
                    <h4>services communs
                <code> <?php if (!empty($promo->services_percentage)) {
	                    		echo $promo->services_percentage;echo "%";
	                    	} ?></code></h4>
      
                  </div>
                  <div class="card-body">
                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Ascenseur 
	                        </span>
	                        <span class="float-right text-muted">
	                           <?php  if ($promo->services_lift==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Accès PMR 
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_pmraccess==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Parking vélo
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_bicycleparking==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Piscine
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_swimmingpool==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         SPA
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_spa==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Sport
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_sports==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Réception colis
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_packetreceipt==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Commerce 
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_commerceinside==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          ClosPrivé
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_closeprivate==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Gardiennage 
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_guarding==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Park.Voit.Elec 
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_electricalterminal==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Senior 
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($promo->service_seniorservices==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                  <div class="card card-success">
	                  <div class="card-header">
	                    <h4>Durabilité
	                <code> <?php if (!empty($promo->durabilite_percentage)) {
	                    		echo $promo->durabilite_percentage;echo "%";
	                    	} ?></code></h4>
	                  </div>
	                  <div class="card-body">
	                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                           PEB 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->durability_peb}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          DépendanceEner 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->durability_energydependency}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Recyclabilité 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->durability_recyclability}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                        CO2
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->durability_co2_construction}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Mat.Structure
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->durability_materials_structure}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Mat.Finition
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->durability_materials_finition}}
	                        </span>
	                      </p>
	                    </div>
	                  </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-warning">
                  <div class="card-header">
                    <h4>Invesstisseurs
                    <code> <?php if (!empty($promo->invesstisseur_percentage)) {
	                    		echo $promo->invesstisseur_percentage;echo "%";
	                    	} ?></code></h4>
                  </div>
                  <div class="card-body">
                   <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Rendem.garanti %
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->guaranteedrendement}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Rendem.Espéré % 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$promo->expectedrendement}}
	                        </span>
	                      </p>
	                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Documment</h4>
                  </div>
                  <div class="card-body">
                    <div class="chocolat-parent">
                      <a href="assets/img/image-gallery/3.png" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                          <img alt="image" src="assets/img/image-gallery/{{$promo->image}}" class="img-fluid">
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>
@endforeach
@endsection