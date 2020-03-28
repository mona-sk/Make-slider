<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>

    <title>@section('title')Laravel| @show</title>
</head>
<body style="background-color:#d7d7d7;margin:0">
<!--make menu-->
<section >
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="{{url('post')}}">slider</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('slider')}}">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('post/create')}}">Crete</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!--end make menu-->
    @yield('content')


@yield('js')
<script src={{asset('bootstrap/js/bootstrap.min.js')}}></script>

</body>
</html>
