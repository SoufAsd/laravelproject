@extends('layouts.admin')
@section('content')
       <section class="section">
          <div class="section-body">
             <div class="card">
                  <div class="card-header">
                    <h4>Ajouter projet</h4>
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
  <?php
   $date=date('d-m-y');
    ?>
          <form method="POST" action="{{ url('ajouteagence') }}" class="needs-validation" novalidate="">
               {{csrf_field()}}
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Nom Projet <span>*</span> </label>
                        <input type="text" class="form-control" id="inputEmail4" name="name">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Availability <span>*</span></label>
                        <input type="date" class="form-control" id="inputPassword4" name="availability">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Date de création</label>
                        <input type="date" class="form-control" id="creationdate" name="creationdate" value="<?= $date ?>">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">code postal</label>
                        <select  class="form-control" name="postalcode">
                        @foreach($postcode as $postcode)
                          <option value="{{$postcode->id}}">{{$postcode->postcode}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">locality</label>
                        <select  class="form-control" name="locality">
                        @foreach($localite as $post)
                          <option value="{{$post->localite}}">{{$post->localite}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Adress <span>*</span></label>
                        <input type="text" class="form-control" id="inputEmail4" name="streetadress">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Latitude</label>
                        <input type="number" class="form-control" id="inputPassword4" name="latitude">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">longitud</label>
                        <input type="number" class="form-control" id="inputPassword4" name="longitud">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Email <span>*</span></label>
                        <input type="text" class="form-control" id="inputEmail4" name="mail_proj">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">export</label>
                        <input type="number" class="form-control" id="inputEmail4" name="export">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">logreport</label>
                        <input type="number" class="form-control" id="inputPassword4" name="logreport">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">duration</label>
                        <input type="number" class="form-control" id="inputEmail4" name="duration">
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