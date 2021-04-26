@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Project Stagese</h4>
                    <div  style="position: absolute;right: 9px;">
                    <a href="{{ url('projectstages/ajouter')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ajouter</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>project Stagese</th>
                            <th>{{ __('messages.Action') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tariffagency as $tariffagency)
                            <tr>
                           <td>
                              {{ $tariffagency->id}}
                            </td>
                            <td>{{ $tariffagency->projectstage}}</td>
                             <td>
                              <a href="{{ url('projectstages/edit/'.$tariffagency->id)}}" ><i data-feather="edit"></i></a>
                              <a href="{{url('projectstages/delete/'.$tariffagency->id)}}" class="delete_form" ><i data-feather="trash-2"></i></a>
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