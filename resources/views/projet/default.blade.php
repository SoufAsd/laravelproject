@extends('layouts.admin')
@section('content')

 

 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Projet</h4>
                    <div  style="position: absolute;right: 9px;">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>Name</th>
                            <th>availability</th>
                            <th>date de création</th>
                            <th>Adresse</th>
                            <th>Action</th>
                            <th>Propriétés</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=0;  ?>
                          @foreach($projects as $projects)
                            
                            <tr>
                           <td>
                              {{ $projects->id}}
                            </td>
                            
                            <td>{{ $projects->projectname}}</td>
                            <td class="align-middle">
                              {{ $projects->availability}}
                            </td>
                            <td>
                               {{ $projects->creationdate}}
                            </td>
                               <td class="align-middle">
                              {{ $projects->streetadress}} {{ $projects->postalcode}} {{ $projects->locality}}
                            </td>
                             <td>
                              <a href="{{ url('projet/show/'.$projects->id)}}" ><i data-feather="search"></i></a>
                              <a href="{{url('projet/delete/'.$projects->id)}}" class="delete_form" ><i data-feather="trash-2"></i></a>
                            </td>
                            <td>
                              <a href="{{ url('projet/property/'.$projects->id)}}" class="btn btn-info">Propriété (<?php
echo $var[$i];

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