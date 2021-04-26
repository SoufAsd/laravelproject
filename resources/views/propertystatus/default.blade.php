@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Property Status</h4>
                    <div  style="position: absolute;right: 9px;">
                    <a href="{{ url('propertystatus/ajouter')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ajouter</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>property status</th>
                            <th>{{ __('messages.Action') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tariffagency as $tariffagency)
                            <tr>
                           <td>
                              {{ $tariffagency->id}}
                            </td>
                            <td>{{ $tariffagency->propertystatus}}</td>
                             <td>
                              <a href="{{ url('propertystatus/edit/'.$tariffagency->id)}}" ><i data-feather="edit"></i></a>
                              <a href="{{url('propertystatus/delete/'.$tariffagency->id)}}" class="delete_form" ><i data-feather="trash-2"></i></a>
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