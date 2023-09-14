@extends('template.master')

@section('conten')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cast Form</h1>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cast Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Cast</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('cast.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputNama" placeholder="Enter nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUmur">Umur</label>
                    <input type="number" class="form-control" name="umur" value="umur" id="exampleInputUmur" placeholder="Umur">
                  </div>
                  <div class="form-group">
                    <label for="exampleInpuBio">Bio</label>
                    <textarea type="text" class="form-control" name="bio" id="bio" cols="30" rows="10" placeholder="Bio"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection