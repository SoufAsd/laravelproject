@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>{{ __('messages.Tarif Plan Promotors') }}</h4>
                    <div  style="position: absolute;right: 9px;">
                    <a href="{{ url('tariffpromotors/ajouter')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ajouter</a>
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
                            <th>{{ __('messages.User Supp Price') }}</th>
                             <th>{{ __('messages.Action') }}</th>
                   
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tariffpromotors as $tariffpromotors)
                            <tr>
                           <td>
                              {{ $tariffpromotors->id}}
                            </td>
                            <td>{{ $tariffpromotors->name}}</td>
                            <td class="align-middle">
                              {{ $tariffpromotors->amount}}
                            </td>
                            <td>
                               {{ $tariffpromotors->max_users}}
                            </td>
                               <td class="align-middle">
                              {{ $tariffpromotors->user_supp_price}}
                            </td>
                            <td>
                              <a href="{{ url('tariffpromotors/edit/'.$tariffpromotors->id)}}" ><i data-feather="edit"></i></a>
                              <a href="{{url('tariffpromotors/delete/'.$tariffpromotors->id)}}" class="delete_form" ><i data-feather="trash-2"></i></a>
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
 <script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection