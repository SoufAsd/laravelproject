@extends('layouts.admin')
@section('content')
@foreach($data as $data)

 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
	                <div class="card">
	                  <div class="card-header">
	                  	<h4>Détails Propriété</h4>
	                  	<div class="badge badge-warning" style="position: absolute;right: 9px;">{{$data->complete_percentage}} %</div>
	                  </div>
	                  <div class="card-body">
	                    <div class="py-4">
	                    	<p class="clearfix">
	                        <span class="float-left">
	                         Ref
	                        </span>
	                        <span class="float-right text-muted">
	                          {{ sprintf('%04d',$data->project_id)  }}-{{ sprintf('%04d',$data->pro_id)  }}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Pro type
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->propertytype}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Status
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->propertystatus}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Responsible
	                        </span>
	                        <span class="float-right text-muted">
	                           {{ $data->last_name}} {{ $data->first_name}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Téléphone
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->tel_prop}}
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
	                          {{$data->date_availability}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          date de création 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->created_at}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Commission Agence % 
	                        </span>
	                        <span class="float-right text-muted">
	                         {{$data->agencycommission}}
	                        </span>
	                      </p>


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
			                {{$data->comment}}
			               </div>
		                </div>
              </div>
             </div>
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
                  <div class="card card-primary">
	                  <div class="card-header">
	                    <h4>Location
	                    	<code> <?php if (!empty($data->location_percentage)) {
	                    		echo $data->location_percentage;echo "%";
	                    	} ?></code></h4>
	                  </div>
	                  <div class="card-body">
	                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Level 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->level}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Total Level 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->totallevels}}
	                        </span>
	                      </p>
	                      <h5>Living</h5>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Orientation 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->orientation_living}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         view
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->view_living}}
	                        </span>
	                      </p>
	                      <h5>Terrace</h5>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Nb Terrace
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->sq_terrace}}
	                        </span>
	                      </p>
	                      	<?php $i=1;  ?>
	                       	@foreach($terrace as $terrace)
	                       <p class="clearfix">
	                       
	                        <span class="float-left">
	                         Terrace  <?php echo $i;  ?> Orient
	                        </span>
	                        <span class="float-right text-muted">
	                        	
	                          {{$terrace}}<br>
	                         
	                          
	                        </span>
	                      </p>
	                       <?php $i++;  ?>
							  @endforeach
							  <?php $i=1;  ?>
							  @foreach($view as $view)
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Terrace 1 view 
	                        </span>
	                        <span class="float-right text-muted">
	                          
	                          {{$view}}<br>
							 
	                        </span>
	                      </p>
	                       <?php $i++;  ?>
							  @endforeach
	                      <h5>Garage</h5>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Nb Garage 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->sq_garage}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Garage m²
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->garage}}
	                        </span>
	                      </p>
	                      <h5>Parking</h5>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Car parking 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->privatecarparking}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Parking Type
	                        </span>
	                        <span class="float-right text-muted">
	                         {{$data->parkingtype}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Bike Parking
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->privatebicycleparking}}
	                        </span>
	                      </p>
	                    </div>
	                  </div>
                  </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h4>Surface
                <code> <?php if (!empty($data->surfaces_percentage)) {
	                    		echo $data->surfaces_percentage;echo "%";
	                    	} ?></code></h4>
                  </div>
                  <div class="card-body">
                   <div class="py-4">

	                      <p class="clearfix">
	                        <span class="float-left">
	                          App type 
	                        </span>
	                        <span class="float-right text-muted">
	                        {{$data->apptype}}
	                        </span>
	                      </p>
	                      <h5> Bedrooms</h5>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Nb Bedrooms 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->nbsleeproom}}<br>

	                           @foreach($sq_sleeproom as $sq_sleeproom)
	                           	   {{$sq_sleeproom}}<br>
	                           @endforeach
	                        </span>
	                      </p>
	                      <h5> Bathroom</h5>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Nb Bathroom 
	                        </span>
	                        <span class="float-right text-muted"> 
	                          {{$data->nbbathroom}}<br>
	                          @foreach($sq_bathroom as $sq_bathroom)
	                           	   {{$sq_bathroom}}<br>
	                           @endforeach
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                         Total 
	                        </span>
	                        <span class="float-right text-muted">
	                         {{$data->sq_total}} m²
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Habit 
	                        </span>
	                        <span class="float-right text-muted">
	                       {{$data->sq_habitable}} m²
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Living 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->sq_living}} m²
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          SAM  
	                        </span>
	                        <span class="float-right text-muted">
	                        {{$data->sq_sam}}m²
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Terrace  
	                        </span>
	                        <span class="float-right text-muted">
	                        {{$data->sq_terrace}} m²
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Kitchen  
	                        </span>
	                        <span class="float-right text-muted">
	                        {{$data->sq_kitchen}} m²
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Cave  
	                        </span>
	                        <span class="float-right text-muted">
	                        	{{$data->sq_attic}} m²
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Private Garden  
	                        </span>
	                        <span class="float-right text-muted">
	                        	{{$data->sq_privategarden}} m²
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Sq Comm Garden  
	                        </span>
	                        <span class="float-right text-muted">
	                        	{{$data->sq_commongarden}} m²
	                        </span>
	                      </p>
	                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                  <div class="card card-success">
	                  <div class="card-header">
	                    <h4>Budget
	                <code> <?php if (!empty($data->budget_percentage)) {
	                    		echo $data->budget_percentage;echo "%";
	                    	} ?></code></h4>
	                  </div>
	                  <div class="card-body">
	                    <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                           Budget WO Finish Brut 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_wo_finish_brut}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Budget WO Finish Net 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_wo_finish_net}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Budget Basic Brut 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_basic_brut}}
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                        Budget Basic Net
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_basic_net}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Budget Lux Brut 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_lux_brut}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Budget Lux Net
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_lux_net}}
	                        </span>
	                      </p>

	                        <p class="clearfix">
	                        <span class="float-left">
	                          Annual Charge
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->annualcharges}}
	                        </span>
	                      </p>
	                        <p class="clearfix">
	                        <span class="float-left">
	                          Expected Rendement
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->expectedrendement}}
	                        </span>
	                      </p>
	                        <p class="clearfix">
	                        <span class="float-left">
	                          Guaranteed Rendement
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->guaranteedrendement}}
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Average
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->average}}
	                        </span>
	                      </p>

	                       <p class="clearfix">
	                        <span class="float-left">
	                         Long term lease
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($data->longterm_lease==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                      <h5>Budget at m²</h5>
	                       <p class="clearfix">
	                        <span class="float-left">
	                           Budget WO Finish Brut 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{$data->budget_wo_finish_brut/$data->sq_habitable}} €
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Budget WO Finish Net 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{ number_format($data->budget_wo_finish_net/$data->sq_habitable, 2) }} €
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Budget Basic Brut 
	                        </span>
	                        <span class="float-right text-muted">
	                          {{ number_format($data->budget_basic_brut/$data->sq_habitable, 2) }} €
	                        </span>
	                      </p>
	                      <p class="clearfix">
	                        <span class="float-left">
	                        Budget Basic Net
	                        </span>
	                        <span class="float-right text-muted">
	                        	{{ number_format($data->budget_basic_net/$data->sq_habitable, 2) }}  €
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                         Budget Lux Brut 
	                        </span>
	                        <span class="float-right text-muted">
	                        	{{ number_format($data->budget_lux_brut/$data->sq_habitable, 2) }}  €
	                        </span>
	                      </p>
	                       <p class="clearfix">
	                        <span class="float-left">
	                          Budget Lux Net
	                        </span>
	                        <span class="float-right text-muted">
	                        	{{ number_format($data->budget_lux_net/$data->sq_habitable, 2) }}  €
	                        </span>
	                      </p>
	                    </div>
	                  </div>
                  </div>
              </div>
            </div>
            <div class="row">
              
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card card-warning">
                  <div class="card-header">
                    <h4>Confort
                    <code> <?php if (!empty($data->confort_percentage)) {
	                    		echo $data->confort_percentage;echo "%";
	                    	} ?></code></h4>
                  </div>
                  <div class="card-body">
                   <div class="py-4">
	                      <p class="clearfix">
	                        <span class="float-left">
	                          Equipped Kitchen
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($data->comfort_eq_cuisine==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                          Bathroom Installed
	                        </span>
	                        <span class="float-right text-muted">
	          				    <?php  if ($data->comfort_sdb_installee==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                          Air Conditionned
	                        </span>
	                        <span class="float-right text-muted">
	                            <?php  if ($data->comfort_airconditionned==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                          Domotic
	                        </span>
	                        <span class="float-right text-muted">
	                            <?php  if ($data->comfort_domotic==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                         Individual Electrical Terminal 
	                        </span>
	                        <span class="float-right text-muted">
	                          <?php  if ($data->comfort_individualelectricalterminal==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                         Reinforced Decor
	                        </span>
	                        <span class="float-right text-muted">
	                           <?php  if ($data->comfort_reinforceddoor==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                          Open Fire
	                        </span>
	                        <span class="float-right text-muted">
	                           <?php  if ($data->comfort_openfire==1) {
	                         	echo "Oui";
	                         }else{
	                         	echo "Non";
	                         } ?>
	                        </span>
	                      </p>
	                         <p class="clearfix">
	                        <span class="float-left">
	                         Reduced Mobility
	                        </span>
	                        <span class="float-right text-muted">
	                            <?php  if ($data->comfort_reducedmobility==1) {
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
              <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Documment</h4>
                  </div>
                  <div class="card-body">
                    <div class="chocolat-parent">
                      <a href="assets/img/image-gallery/3.png" class="chocolat-image" title="Just an example">
                        <div data-crop-image="285">
                          <img alt="image" src="assets/img/image-gallery/" class="img-fluid">
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