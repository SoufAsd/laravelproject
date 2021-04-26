@extends('layouts.admin')
@section('content')


 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Agence</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Address</th>
                            <th>Email </th>
                            <th>Ipi Nombre</th>
                            <th>Action</th>
                            <th>utilisateurs</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php $i=0;  ?>
                          @foreach($agence as $agence)
                            <tr>
                           <td>
                              {{ $agence->id}}
                            </td>
                            <td>{{ $agence->name}}</td>
                            <td class="align-middle">
                              {{ $agence->address}}
                            </td>
                            <td>
                               {{ $agence->contact_email}}
                            </td>
                               <td class="align-middle">
                              {{ $agence->ipi_number}}
                            </td>
                            <td>
                              <a href="{{ url('agence/'.$agence->id)}}" class="btn btn-primary">Detail</a>
                            </td>
                             <td>
                              <a href="{{ url('agence/user/'.$agence->id)}}" class="btn btn-info">Utilisateurs (<?php
echo $utili[$i];

$i++;
 
?>)</a>
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