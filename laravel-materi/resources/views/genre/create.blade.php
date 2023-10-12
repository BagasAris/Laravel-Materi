@extends('template.master')

@section('conten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Genre Form</h1>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Genre Form</li>
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Genre</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('genre.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="exampleInputNama" placeholder="Enter nama" value="{{ old('nama') }}">
                  </div>
                  @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Back</a>
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
  <div class="modal" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Peringatan</h5>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Yakin Akan Keluar Dari Form Create Data Genre</p>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="{{ route('genre.index') }}" class="btn btn-success">Yes</a>
                  </div>
                </div>
              </div>
            </div>
@endsection