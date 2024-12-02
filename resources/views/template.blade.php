<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lia - Aulia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/fontawesome.js"></script>
  <script src="/js/solid.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/bagian">Bagian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">EAS</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container">
        <h2> Aulia Hanifah - 5026221198 </h2>
        <h3>@yield('test1')</h3>

        @yield('link1')

        <br/>
        <br/>

        @yield('konten')

    </div>
  </body>
</html>
