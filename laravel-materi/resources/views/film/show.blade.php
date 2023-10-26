@extends('template.master')

@section('conten')
    <!-- Main content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3"> 

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                      src="{{ $film->poster }}"
                      alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $film->judul }}</h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Genre</b> <a class="float-right">{{ $film->genre[0]->nama }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tahun</b> <a class="float-right">{{ $film->tahun }}</a>
                  </li>
                </ul>

                <a href="{{ route('kritik.create', ['id' => $film]) }}" class="btn btn-primary btn-block"><b>Add Kritik</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ringkasan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Cast</strong>

                <p class="text-muted">
                  @forelse ($film->peran()->get() as $peran)
                    {{ $peran->cast[0]->nama }} ({{ $peran->nama}})
                  @empty
                    Tidak Ada Data Cast
                  @endforelse
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2 text-center bg-primary"> 
                <h5>Kritik</h5>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    @foreach ($film->kritik->reverse() as $kritik)
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{ asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">@foreach ($kritik->user as $user)
                            {{ $user->name}}
                          @endforeach</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">{{ $kritik->created_at }}</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{-- @forelse ($film->kritik as $kritik) --}}
                          {{ $kritik->content }}
                        {{-- @empty
                          Belum Ada Kritik Yang Tersedia
                        @endforelse --}}
                      </p>
                      Rating: {{ $kritik->point }}
                    </div>
                    @endforeach
                    <!-- /.post -->
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection