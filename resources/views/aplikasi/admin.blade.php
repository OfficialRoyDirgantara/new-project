<!doctype html>
<html lang="en">
    <head>
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#f2c809">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- icon in the highest resolution we need it for -->
        <link rel="icon" sizes="192x192" href="{{asset('assets/img/Logo_PENS.png')}}">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    

        <title>@yield('title')</title>
    </head>
    <body>

        <!-- Navbar -->
        
        <nav class="navbar navbar-expand-lg navbar-light navbar-additional-theme">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                    <a class="nav-link" onmouseover="openCity(event, 'Home')">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" onmouseover="openCity(event, 'Information')">INFORMATION<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#" onmouseover="openCity(event, 'News')">NEWS<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#" onmouseover="openCity(event, 'Users')">USERS<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            </nav>
        <!-- End of Navbar -->
        <div class="content"></div>

        <div class="container box-admin">
            <div id="Home" class="tabcontent">
            <a href="{{url('/')}}" target="_blank"><button class="btn btn-success"><h3>HOME</h3></button></a>

            </div>
            
            <div id="Information" class="tabcontent">
            <a href="{{url('/information')}}" target="_blank"><button class="btn btn-success"><h3>INFORMATION</h3></button></a>
            <p>Paris is the capital of France.</p> 
            </div>
            
            <div id="News" class="tabcontent">
            <a href="{{url('/news')}}" target="_blank"><button class="btn btn-success"><h3>NEWS</h3></button></a>
            <p>Tokyo is the capital of Japan.</p>
            </div>
            <div id="Users" class="tabcontent col-lg">
            <h1>LIST USER</h1>
            <button class="btn btn-success">Add</button>
            <div class="table-responsive-sm">
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $loop-> iteration}}</th>
                        <td>{{$user -> id_user}}</td>
                        <td>{{$user -> name_user}}</td>
                        <td>{{$user -> email_user}}</td>
                        <td>{{$user -> status_user}}</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

            </div>
        </div>
        
        
        
        
        
        
        
        <div class="footer">
            <p>© Copyright 2020 | by Okky Roy Dirgantara.</p>
            </div>
            


        <!-- JS CUSTOM -->
        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        </script>
        <!-- Optional JavaScript; choose one of the two! -->
        
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html>