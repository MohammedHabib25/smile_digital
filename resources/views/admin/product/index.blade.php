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
                            <th> created </th>
                            <th> Action </th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $product)
            <tr>
                
                 <td>{{ $product->name }}</td>
                 <td>{{ $product->created_at }}</td>
                 
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="mdi mdi-close-octagon">Delete</button>
                        </form>
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