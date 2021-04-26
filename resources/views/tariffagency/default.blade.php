@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>{{ __('messages.Tarif Plan Agency') }}</h4>
                    <div  style="position: absolute;right: 9px;">
                    <a href="{{ url('tariffagency/ajouter')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ajouter</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>{{ __('messages.name') }}</th>
                            <th>{{ __('messages.Amount') }}</th>
                            <th>{{ __('messages.Max Users') }}</th>
                            <th>{{ __('messages.Ref exclusif') }}</th>
                            <th>{{ __('messages.Action') }}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tariffagency as $tariffagency)
                            <tr>
                           <td>
                              {{ $tariffagency->id}}
                            </td>
                            <td>{{ $tariffagency->name}}</td>
                            <td class="align-middle">
                              {{ $tariffagency->amount}}
                            </td>
                            <td>
                               {{ $tariffagency->max_users}}
                            </td>
                               <td class="align-middle">
                              {{ $tariffagency->ref_exclusif}}
                            </td>
                             <td>
                              <a href="{{ url('tariffagency/edit/'.$tariffagency->id)}}" ><i data-feather="edit"></i></a>
                              <a href="{{url('tariffagency/delete/'.$tariffagency->id)}}" class="delete_form" ><i data-feather="trash-2"></i></a>
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