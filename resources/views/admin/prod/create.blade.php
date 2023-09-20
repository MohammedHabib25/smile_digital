@extends('admin.perant')

@section('content')

<form action="{{route('prod.store')}}" method="post">
    @csrf
<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ADD Serves</h4>
         

            <div class="form-group">
              <label for="name">ADD Serves</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name serves">
            </div>
           
            <button type="submit"  class="btn btn-gradient-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
    @endsection



    