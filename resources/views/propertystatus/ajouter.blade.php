@extends('layouts.admin')
@section('content')
       <section class="section">
          <div class="section-body">
             <div class="card">
                  <div class="card-header">
                    <h4>Ajouter Property Status</h4>
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
          <form method="POST" action="{{ url('ajoutestatus') }}" class="needs-validation" novalidate="">
               {{csrf_field()}}
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputEmail4">Property Status</label>
                        <input type="text" class="form-control" id="inputEmail4" name="propertystatus">
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