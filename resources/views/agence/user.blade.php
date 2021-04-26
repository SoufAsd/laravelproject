@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>utilisateurs</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Gsm</th>
                            <th>ID utilisateur</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($age as $age)
                      
                            <tr>
                           <td>
                              {{ $age->id}}
                            </td>
                            <td>{{ $age->last_name}}{{ $age->first_name}}</td>
                            <td>
                               {{ $age->mail}}
                            </td>
                            <td class="align-middle">
                              {{ $age->gsm}}
                            </td>
                            <td>
                              {{ $age->user_id}}
                            </td>
                          </tr> 
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
 </section>
@endsection