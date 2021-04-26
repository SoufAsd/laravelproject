@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Propriété</h4>
                    <div  style="position: absolute;right: 9px;">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>Ref</th>
                            <th>Status</th>
                            <th>Prop Type</th>
                            <th>Responsible</th>
                            <th>Creation date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $data)
                            <tr>
                           <td>
                              
                            {{ sprintf('%04d',$data->project_id)  }}-{{ sprintf('%04d',$data->pro_id)  }}
                            </td>
                            <td>{{ $data->propertystatus}}</td>
                            <td class="align-middle">
                              {{ $data->propertytype}}
                            </td>
                            <td>
                               {{ $data->last_name}} {{ $data->first_name}}
                            </td>
                               <td class="align-middle">
                              {{ $data->created_at}} 
                            </td>
                             <td>
                              <a href="{{ url('projet/propertyshow/'.$data->pro_id)}}" ><i data-feather="search"></i></a>
                              <a href="{{url('projet/propertydelete/'.$data->pro_id)}}" class="delete_form" ><i data-feather="trash-2"></i></a>
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