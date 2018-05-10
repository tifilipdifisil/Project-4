    <!doctype html>
    <html>
    <head>
        <title>@yield('title', 'Project-4')</title>
        <meta charset='utf-8'>

        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='/css/project4.css' type='text/css' rel='stylesheet'>

        @stack('head')
    </head>
    <body>

    <header>

    </header>

    <section>
        @yield('content')
    </section>



    @stack('body')


    <footer class="text-muted">
        <div class="container">
            <p>&copy; {{ date('Y') }} Credits, Philippe Xantus.</p>
            <a href='/about'>Read about us</a> </p>
        </div>
    </footer>