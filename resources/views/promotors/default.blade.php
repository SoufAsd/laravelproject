@extends('layouts.admin')
@section('content')


 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Promoteurs</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>Nom Perso</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Num Upsi</th>
                            <th>Action</th>
                            <th>utilisateurs</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=0;  ?>
                          @foreach($promotors as $promotors)
                            <tr>
                           <td>
                              {{ $promotors->id}}
                            </td>
                            <td>{{ $promotors->name_perso}}</td>
                            <td class="align-middle">
                              {{ $promotors->address}}
                            </td>
                            <td>
                               {{ $promotors->email_pro}}
                            </td>
                             <td class="align-middle">
                              {{ $promotors->num_upsi}}
                            </td>
                            <td>
                              <a href="{{ url('promotors/'.$promotors->id)}}" class="btn btn-primary">Detail</a>
                            </td>
                             <td>
                              <a href="{{ url('promotors/user/'.$promotors->id)}}" class="btn btn-info">Utilisateurs (<?php
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