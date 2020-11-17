@extends('template.base')

@section('content')
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">login</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">login</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- isi content -->
<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4 ">
          <div class="card bg-sucsses">
            <div class="card-header mb-0 text-"><h5 class="text-center font-weight-bold bg-sucsses">Please <span class="font-weight-bold text-white bg-white">log in</span></h5></div>
            <div class="card-body">

              @include('template.utils.notif')
              <form action="{{url('login')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Username" name="email">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
                <div class="form-group">
                  <input type="submit" name="" value="Login" class="btn btn-dark btn-block ">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- akhir isi content -->




@endsection
