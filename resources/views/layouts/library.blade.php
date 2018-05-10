<!doctype html>
<html>
<head>
    <title>@yield('title', 'Library')</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href='/css/library.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>




<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    @yield('navigation')
</nav>

<section class="jumbotron text-center">
    <div class="container">
        @yield('content')
    </div>
</section>


<div class="card mb-4 box-shadow">
   @yield('tag')
</div>


@stack('body')

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>&copy; {{ date('Y') }} Credits, Philippe Xantus.</p>
        <a href='/about'>Read about us</a> </p>
    </div>
</footer>

</body>




</html>