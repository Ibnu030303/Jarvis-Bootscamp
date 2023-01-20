<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SMK_Dubesta</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 bg-dark border-0" > Logout
          </form>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
           <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('post*') ? 'active' : '' }}" href="">
              <span data-feather="file" class="align-text-bottom"></span>
                Edit data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">
              <span data-feather="file" class="align-text-bottom"></span>
                My Post
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit data</h1>
        </div>
        <div class="col-lg-8">
            <main class="form-registration m-auto mb-10">
            <form action="/post/{{ $post->id }}" method="post">
                @csrf
                @method('put')

                <div class="form-floating mt-2">
                    <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"  id="nik" placeholder="nik" required  value="{{ old ('nik', $post->nik) }}">
                    <label for="nik">NIK</label>
                    @error('nik')
                        <div class="invalid-feedback">
                            Nik sudah terdafatar
                        </div>
                    @enderror
                <div class="form-floating mt-2">
                    <input type="text" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror"  id="no_kk" placeholder="name@example.com" required value="{{ old ('no_kk', $post->no_kk) }}">
                    <label for="no_kk">Nomor KK</label>
                    @error('no_kk')
                    <div class="invalid-feedback">
                        Nomor Kartu Keluarga sudah terdaftar
                    </div>
                    @enderror
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="nis" required  value="{{ old ('nis', $post->nis) }}">
                    <label for="nis">NIS</label>
                    @error('nis')
                    <div class="invalid-feedback">
                         NIS sudah terdaftar
                    </div>
                     @enderror
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="nisn" required  value="{{ old ('nisn', $post->nisn) }}">
                    <label for="nisn">NISN</label>
                    @error('nisn')
                    <div class="invalid-feedback">
                         NISN Sudah terdaftar
                    </div>
                     @enderror
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" required  value="{{ old ('nama', $post->nama) }}">
                    <label for="nama">Nama</label>
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" placeholder="jenis_kelamin" required  value="{{ old ('jenis_kelamin', $post->jenis_kelamin) }}">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="tempat_lahir" required  value="{{ old ('tempat_lahir', $post->tempat_lahir) }}">
                    <label for="tempat_lahir">Tempat lahir</label>
                </div>
                
                <div class="form-floating mt-2">
                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="tanggal_lahir" required  value="{{ old ('tanggal_lahir', $post->tanggal_lahir) }}">
                    <label for="tanggal_lahir">Tanggal lahir</label>
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required  value="{{ old ('alamat', $post->alamat) }}">
                    <label for="alamat">Alamat</label>
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="no_hp" required  value="{{ old ('no_hp', $post->no_hp) }}">
                    <label for="no_hp">No Hp</label>
                    @error('no_hp')
                    <div class="invalid-feedback">
                         plasee chooice a Nomor Hp min 11
                    </div>
                     @enderror
                </div>
                
                <div class="form-floating mt-2">
                    <input type="text" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="tahun_masuk" required  value="{{ old ('tahun_masuk', $post->tahun_masuk) }}">
                    <label for="tahun_masuk">Tahun Masuk</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3 mb-10" type="submit">Update Post</button>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </form>

            </main>

        </div>
    </main>
  </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="/js/dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
