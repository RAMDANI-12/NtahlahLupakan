<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentBooks | @yield ('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Combo&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<style>
        .main{
            height: 100vh;
        }
        .sidebar{
            background-color:   #110101; 
        }

        .navbar-brand{
            font-family: cursive;
            color: white;
            font-size: 25px;
        }
        .sidebar a{
            text-decoration: none;
            padding: 15px 20px;
            color: white;
            display: block;
            color: white;
            
        }
        .sidebar a.active{
            border-left: solid 3px #ECF9FF;
        }
        /* .sidebar a:hover{  } */
        .books{
            background-color: #00FFD1;
        }
        .category{
            background-color: #00FFD1;
        }
        .user{
            background-color: #00FFD1;
        }

        .card-data{
            border-radius: 5px;
            padding: 15px 40px;
            border: solid 1px;
            color: #fff;
            
        }
        .card-data i{
            font-size: 50px;
        }
        .desc{
            font-size: 30px;
        }
        .count{
            font-size: 25px;
        }
    </style>
<body>
    <div class="main d-flex flex-column justify-content-between">
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #110101;">
            <div class="container">
                <a class="navbar navbar-brand" href="#">RENTBOOKS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">      
    </div>
    </div>
</nav>
<div class="body-main h-100">
    <div class="row g-0 h-100">
        <div class="sidebar col-lg-2 p-2 collapse d-lg-block" id="navbarSupportedContent">
            @if(Auth::user()->roles_id == 1)
            <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class= 'active' @endif><i class="bi bi-house-door"></i> Dashboard</a>
            <a href="/users" @if(request()->route()->uri == 'users') class= 'active' @endif><i class="bi bi-person"></i> Users</a>
            <a href="/category" @if(request()->route()->uri == 'category') class= 'active' @endif><i class="bi bi-bookmarks"></i> Category</a>
            <a href="/book" @if(request()->route()->uri == 'book') class= 'active' @endif><i class="bi bi-book-half"></i> Books</a>
            <a href="/rentlogs" @if(request()->route()->uri == 'rentlogs') class= 'active' @endif><i class="bi bi-cart-plus"></i> RentLogs</a>
            <a href="/logout" class="mb-2 position-absolute bottom-0 start-0 bi bi-box-arrow-left"> Logout</a>
            @else
            <a href="/profile" @if(request()->route()->uri == 'profile') class= 'active' @endif><i class="bi bi-person"></i> Profile</a>
            <a href="/book-user" @if(request()->route()->uri == 'book-user') class= 'active' @endif><i class="bi bi-book-half"></i> Books</a>
            <a href="/logout" class="position-absolute bottom-0 start-0 bi bi-box-arrow-left"> Logout</a>
            @endif
        </div>
        {{-- <div class="main-content">
             <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checxbox" id="menu-label">
                    <div id="checkbox"></div>
                </label>
             </div>
        </div> --}}
        <div class="col-lg-10 p-3 content">
            @yield('content')
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>