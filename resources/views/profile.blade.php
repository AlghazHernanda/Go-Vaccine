<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Pengguna</title>
    <link rel="stylesheet" href="css/Page_Pengguna.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Halaman Pengguna</title>
</head>


<!-- navbar -->

<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow " style="background-color: #70ccb4;">
        <div class="container" style="font-family:Montserrat;">
            <a class="navbar-brand" style="font-size: 30px; font-family: arial;" href="/">Govac</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"  style="margin-right: 50px; color: white; border-radius: 110px;" href="/information">Vaksin</a>
                    </li>
                    @guest                    <!-- IF BELOM LOGIN -->
                    <li class="nav-item" style="background-color: #70ccb4; ">                   
                        <a style="border-color: white; color: white; width: 120px;" type="btn-border-radius " class="btn  btn-border-radius-sm;" href="/login">Login<a>
                    </li>
                    @else                    <!-- Else Sudah login-->
                    <li class="nav-item" style="background-color: #70ccb4; ">                   
                        <a class="nav-link"  style="margin-right: 50px; color: white; border-radius: 110px;" href="/profil">{{ Auth::user()->nama }}<a>
                    </li>
                    <li class="nav-item" style="background-color: #70ccb4; ">                   
                        <a style="border-color: white; color: white; width: 120px;" type="btn-border-radius " class="btn  btn-border-radius-sm;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        </form>
                    </li>
                    @endguest
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="Data Pengguna" style="margin-top: 50px; ">
        <h1>Data Pengguna</h1>
        <div class="row align-items-start" style="width: 100%;">
            <div class="col">
                <h3>Nama</h3>
                <p class="Nama Pengguna">{{ Auth::user()->nama }}</p>
            </div>
            <div class="col">
                <h3>Nik</h3>
                <p class="NIK Pengguna">{{ Auth::user()->nik }}</p>
            </div>
        </div>

        <div class="row align-items-start" style="width: 100%;">
            <div class="col">
                <h3>Tgl lahir</h3>
                <p class="Tgl Lahir Pengguna">{{ Auth::user()->tanggal_lahir }}</p>
            </div>
            <div class="col">
                <h3>No Hp</h3>
                <p class="No HP Pengguna">{{ Auth::user()->no_hp }}</p>
            </div>
        </div>

        <h3>Alamat</h3>
        <p>{{ Auth::user()->alamat }}</p>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr class="judultabel">
                    <th scope="col">No Tiket</th>
                    <th scope="col">Nama Vaksin</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            @foreach($records as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->vaksin}}</td>
                    
                    <td>{{$r->tanggal_vaksin}}</td>
                    <td>{{$r->status}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <footer>
        Copyright 2021 Himatif Unpad
    </footer>

</body>



</html>