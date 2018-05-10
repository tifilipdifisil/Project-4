<!doctype html>
<html>
<head>
    <title>@yield('title', 'Test')</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>

    @stack('head')
</head>
<body>



<header>

</header>

<section id='main'>
    @yield('content')
</section>


@stack('body')

</body>
</html>