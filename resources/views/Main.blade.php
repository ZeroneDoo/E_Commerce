<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
        tailwind.config={
            theme: {
             extend: {
               colors: {
                    'red': '#E32227',
                    'b': '#111111',
                    'g': '#b7b7b7',
                    },
                    boxShadow: {
                    foo: '0px 4px 4px rgba(0, 0, 0, 0.25);',
                    }
                },
            },
        }
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    @vite('resources/css/app.css')
    <script src="{{ asset('assets/js/Noticme.min.js') }}"></script>
    <title></title>
</head>

<body>
    @include('partials.Navbar')

    @yield('content')

    @stack('js')
</body>

</html>
