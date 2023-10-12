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
                <li class="breadcrumb-item active">Film Form</li>
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
                    <h3 class="card-title">Data Film</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputJudul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="exampleInputJudul" placeholder="judul"value="{{ old('judul') }}">
                        </div>
                        @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Genre</label>
                            <select name="genre" id="genre" class="form-control">Genre
                                <option disable>--Pilih Salah Satu--</option>
                                    @foreach ($genres as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                    @endforeach
                            </select>
                        </div>
                        @error('genre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInpuRingkasan">Ringkasan</label>
                            <textarea type="text" class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan" id="ringkasan" cols="30" rows="10" placeholder="ringkasan" value="{{ old('ringkasan') }}"></textarea>
                        </div>
                        @error('ringkasan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputTahun">Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="tahun" id="exampleInputTahun" placeholder="tahun" value="{{ old('tahun') }}">    
                        </div>
                        @error('tahun')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInpuPoster">Poster</label>
                            <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster" id="poster" cols="30" rows="10" placeholder="poster" value="{{ old('poster') }}"></input>
                        </div>
                        @error('poster')
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
                        <p>Apakah Anda Yakin Akan Keluar Dari Form Create Data Cast</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <a href="{{ route('cast.index') }}" class="btn btn-success">Yes</a>
                    </div>
                    </div>
                </div>
                </div>
@endsection