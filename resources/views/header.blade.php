<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/LandingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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
                        <a class="nav-link" href="#" style="margin-right: 50px; color: white; border-radius: 110px;">Vaksin</a>
                    </li>
                    <!-- IF BELOM LOGIN -->
                    <li class="nav-item" style="background-color: #70ccb4; ">                   
                        <a style="border-color: white; color: white; width: 120px;" type="btn-border-radius " class="btn  btn-border-radius-sm;" href="/register">Daftar<a>
                    </li>
                    <!-- Else Sudah login-->
                    <!-- <li class="nav-item" style="background-color: #70ccb4; ">                   
                        <a style="border-color: white; color: white; width: 120px;" type="btn-border-radius " class="btn  btn-border-radius-sm;" href="/profil">User<a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>