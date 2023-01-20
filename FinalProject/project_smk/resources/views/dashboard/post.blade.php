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
            <a class="nav-link {{ Request::is('post*') ? 'active' : '' }}" href="/post">
              <span data-feather="file" class="align-text-bottom"></span>
              My Post
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
        </div>

        <div class="table-responsive col-lg-10">
          <a href="/post/create" class="btn btn-primary mb-3"> Create new Post</a>

          @if(session()->has('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
          @endif

          @if(session()->has('delete'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ session('delete') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
          @endif

          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">NISN</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">HP</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($posts as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->nis }}</td>
                <td>{{ $post->nisn }}</td>
                <td>{{ $post->nama }}</td>
                <td>{{ $post->jenis_kelamin }}</td>
                <td>{{ $post->no_hp }}</td>
                <td>{{ $post->tahun_masuk }}</td>
                <td>
                  <a href="/post/{{ $post->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/post/{{ $post->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                 
                  <form action="/post/{{ $post->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')

                    <button class="badge bg-danger border-0 rounded" onclick="return confirm('Are you sure?')"> <span data-feather="x-circle"></span> </button>
                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
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
