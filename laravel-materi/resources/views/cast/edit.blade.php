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
        <!-- form start -->
        <form action="{{ route('cast.update', $cast[0]->id) }}" method="POST">
            @csrf
            @method('PUT')
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Data Cast</h3>
                </div>
                <!-- /.card-header -->
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="exampleInputNama" value="{{ $cast[0]->nama }}">
                    </div>
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="form-group">
                        <label for="exampleInputUmur">Umur</label>
                        <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ $cast[0]->umur }}">
                    </div>
                    @error('umur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="form-group">
                        <label for="exampleInpuBio">Bio</label>
                        <textarea type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" id="bio" cols="30" rows="10">{{ $cast[0]->bio }} 
                        </textarea>
                    </div>
                        @error('bio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
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