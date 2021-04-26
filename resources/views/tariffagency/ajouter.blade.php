@extends('layouts.admin')
@section('content')
       <section class="section">
          <div class="section-body">
             <div class="card">
                  <div class="card-header">
                    <h4>Ajouter Tariff Plan agence</h4>
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
          <form method="POST" action="{{ url('ajouteagence') }}" class="needs-validation" novalidate="">
               {{csrf_field()}}
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">amount</label>
                        <input type="number" class="form-control" id="inputPassword4" name="amount">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">max users</label>
                        <input type="number" class="form-control" id="inputEmail4" name="max_users">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">relex province supp</label>
                        <input type="number" class="form-control" id="inputPassword4" name="relexprovincesupp">
                      </div>
                       <div class="form-group col-md-6">
                        <label for="inputEmail4">duration</label>
                        <input type="number" class="form-control" id="inputEmail4" name="duration">
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">relex province locale</label><br>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="relexprovincelocale" value="1">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="relexprovincelocale" value="0">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputPassword4">ref exclusif</label><br>
                                     <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="ref_exclusif" value="1">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="ref_exclusif" value="0">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">report stat marche</label><br>
                          <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="reportstatmarche" value="1">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="reportstatmarche" value="0">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputPassword4">report stat property</label><br>
                           <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="reportstatproperty" value="1">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Oui</label>
                                        </div>
                                      </div>
                                      <div class="pretty p-icon p-curve p-tada">
                                        <input type="radio" name="reportstatproperty" value="0">
                                        <div class="state p-primary-o">
                                          <i class="icon material-icons">done</i>
                                          <label>Non</label>
                                        </div>
                                      </div>
                        </div>
                    </div>
                    <div class="form-row">
                    
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputEmail4">export</label><br>
                         <div class="pretty p-icon p-curve p-tada">
                                      <input type="radio" name="export" value="1">
                                      <div class="state p-primary-o">
                                        <i class="icon material-icons">done</i>
                                        <label>Oui</label>
                                      </div>
                                    </div>
                                    <div class="pretty p-icon p-curve p-tada">
                                      <input type="radio" name="export" value="0">
                                      <div class="state p-primary-o">
                                        <i class="icon material-icons">done</i>
                                        <label>Non</label>
                                      </div>
                                    </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputPassword4">logreport</label><br>
                        <div class="pretty p-icon p-curve p-tada">
                                      <input type="radio" name="logreport" value="1">
                                      <div class="state p-primary-o">
                                        <i class="icon material-icons">done</i>
                                        <label>Oui</label>
                                      </div>
                                    </div>
                                    <div class="pretty p-icon p-curve p-tada">
                                      <input type="radio" name="logreport" value="0">
                                      <div class="state p-primary-o">
                                        <i class="icon material-icons">done</i>
                                        <label>Non</label>
                                      </div>
                                    </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
          </form>        
                </div>
          </div>
        </section>
@endsection