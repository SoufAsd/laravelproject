@extends('layouts.admin')
@section('content')
   <section class="section">
          <div class="section-body">
             <div class="card">
                  <div class="card-header">
                    <h4>Ajouter Tariff Plan Promotors</h4>
                  </div>
                   @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

          <form method="POST" action="{{ url('edittariff') }}" class="needs-validation" novalidate="">
               {{csrf_field()}}
               @foreach ($promo as $promo)
               <input type="hidden" name="id" value="{{$promo->id}}">
                 <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{$promo->name}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">amount</label>
                        <input type="number" class="form-control" id="inputPassword4" name="amount" value="{{$promo->amount}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">max users</label>
                        <input type="number" class="form-control" id="inputEmail4" name="max_users" value="{{$promo->max_users}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">user supp price</label>
                        <input type="number" class="form-control" id="inputPassword4" name="user_supp_price" value="{{$promo->user_supp_price}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">max actif projetc</label>
                        <input type="number" class="form-control" id="inputEmail4" name="max_actif_projetc" value="{{$promo->max_actif_projetc}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">max actif items</label>
                        <input type="number" class="form-control" id="inputPassword4" name="max_actif_items" value="{{$promo->max_actif_items}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">diff property amount</label>
                        <input type="number" class="form-control" id="inputEmail4" name="diff_property_amount" value="{{$promo->diff_property_amount}}">
                      </div>
                       <div class="form-group col-md-6">
                        <label for="inputPassword4">archived properties</label>
                        <input type="number" class="form-control" id="inputPassword4" name="archived_properties" value="{{$promo->archived_properties}}">
                      </div>
                       <div class="form-group col-md-6">
                        <label for="inputPassword4">duration</label>
                        <input type="number" class="form-control" id="inputPassword4" name="duration" value="{{$promo->duration}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputEmail4">report stat promotor</label><br>
                          <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="report_stat_promotor" value="1" <?php  if ($promo->report_stat_promotor==1) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="report_stat_promotor" value="0" <?php  if ($promo->report_stat_promotor==0) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">report stat marche</label><br>
                          <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="report_stat_marche" value="1" <?php  if ($promo->report_stat_marche==1) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="report_stat_marche" value="0" <?php  if ($promo->report_stat_marche==0) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputEmail4">relex</label><br>
                         <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="relex" value="1" <?php  if ($promo->relex==1) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="relex" value="0" <?php  if ($promo->relex==0) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">import</label><br>
                        <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="import" value="1" <?php  if ($promo->import==1) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="import" value="0" <?php  if ($promo->import==0) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputEmail4">log report</label><br>
                        <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="log_report" value="1" <?php  if ($promo->log_report==1) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="log_report" value="0" <?php  if ($promo->log_report==0) {echo "checked";} ?>>
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
          </form>        
                </div>
          </div>
        </section>
@endsection