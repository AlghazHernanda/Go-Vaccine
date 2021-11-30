<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style1.css">
    <title>Form Pendaftaran</title>
</head>

<body>
    @include('header')
    <nav style="padding: 32px;">
        <p></p>
    </nav>
    <div style="display: flex; margin-right: 10px;">

        <div style="margin-left: 70px; width: 70%;">
            <h1 style="color:#038e79  ; ">Formulir Pendaftaran</h1>
            <form method="POST" action="{{ route('user.store') }}">
            <input style="margin-top: 10px; width: 93%;" type="text" class="form-control" name="name" placeholder="Nama">
            <input style="margin-top: 10px; width: 93%" type="text" class="form-control" name="nik" placeholder="NIK">
            <input style="margin-top: 10px; width: 93%;" type="text" class="form-control" name="alamat" placeholder="Alamat"><label>Tanggal lahir</label>
            <input style="margin-top: 10px; width: 93%" type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
            <input style="margin-top: 10px; width: 93%;" type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone">
            <input style="margin-top: 10px; width: 93%" type="password" class="form-control" name="password" placeholder="Password">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-top: 10px;">
                <label class="form-check-label" for="flexCheckDefault" style="margin-top: 10px;">
                    Data Diri Yang Telah Anda Isi Telah Benar
                </label>
            </div>
            <button style="border-color: white; margin-top: 20px; background-color :#70ccb4; color: white;" type="btn-border-radius " class="btn  btn-border-radius-sm;">Daftar</button>
            </form>
        </div>

        <aside style="margin-left:10px ; width: 30%;">
            <img style="margin-left: 65px; margin-top: 50px;" src="https://i.ibb.co/t3zD76m/image.png" alt="Govac">
            <p style="font-size: 30px; margin-left: 150px; color:#038e79 ;">
                <b>GOVAC</b>
            </p>
        </aside>
    </div>
    </nav>
    <nav style="padding: 32px;">
        <p></p>
    </nav>
    <footer>
        Copyright 2021 Himatif Unpad
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>