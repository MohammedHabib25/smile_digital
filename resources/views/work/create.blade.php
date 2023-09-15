@extends('admin.perant')

@section('content')

<form action="{{route('work.store')}}" method="post">
    @csrf
<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ADD Serves</h4>
         

            <div class="form-group">
              <label for="name">ADD Serves</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Name serves">
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input type="file" name="image" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
           
            <button type="submit"  class="btn btn-gradient-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
    @endsection



    