@extends('master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Users</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <a href="{{ url('/admin/users/create') }}">
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                        Add
                </button>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm table-borderless table-striped">
                  <thead>
                    <tr class="bg-primary">
                      <th>No.</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <thead></thead>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ([1,2,3,4,5] as $item )
                      <tr>
                        <td>1</td>
                        <td>profile</td>
                        <td>Vathana</td>
                        <td>Male</td>
                        <td>070225201</td>
                        <td>vathanlalala@gmail.com</td>
                      </tr>
                    @endforeach
                </table>
              </div>
            </div>
          </div> 
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input autocomplete="off" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="reset" class="btn btn-danger float-left">
                <i class="fas fa-window-close"></i>
                Cancel</button>
              <button type="submit" class="btn btn-primary float-right">
                <i class="fas fa-save"></i>
                Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection