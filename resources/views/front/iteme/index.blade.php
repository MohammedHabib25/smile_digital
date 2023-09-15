@extends('admin.perant')

@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
             
            </div>
          
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Request serves</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Country </th>
                            <th> type </th>
                            <th> description </th>
                            <th> created_at </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($iteme as $iteme )

                          <tr>
                            
                            <td> {{ $iteme->id }} </td>
                            <td> {{ $iteme->name }} </td>
                            <td>  {{ $iteme->email }} </td>
                            <td> {{ $iteme->phone }}</td>
                            <td>{{ $iteme->country }} </td>
                            <td>{{ $iteme->product->name ?? "" }} </td>
                            <td>{{ $iteme->description }} </td>
                            <td>{{ $iteme->created_at }}</td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                 
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @endsection