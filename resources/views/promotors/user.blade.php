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
                            <th>Num ipi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($promo as $promo)
                      
                            <tr>
                           <td>
                              {{ $promo->id}}
                            </td>
                            <td>{{ $promo->last_name}}{{ $promo->first_name}}</td>
                            <td>
                               {{ $promo->mail}}
                            </td>
                            <td class="align-middle">
                              {{ $promo->gsm}}
                            </td>
                            <td>
                              {{ $promo->num_ipi}}
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