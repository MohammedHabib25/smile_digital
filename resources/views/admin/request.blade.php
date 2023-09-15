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
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> Name </th>
                            <th> Email </th>
                            <th>Mobile </th>
                            <th> Type requst </th>
                            <th> Description </th>
                            <th> Country </th>
                            <th> create_ad </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            
                            <td> Fund is not recieved </td>
                            <td>sss@gamil.com </td>
                            <td> Dec 5, 2017 </td>
                            <td> WD-12345 </td>
                            <td> WD-12345 </td>
                            <td> amg </td>
                            <td> 21/9 </td>
                          </tr>
                          <tr>
                           
                           
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