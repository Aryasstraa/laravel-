<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
</head>

<body>
    <div>
        @include('master.header')
    </div>

    <div>
        <ul>
            @section('sidebar')
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
            @show
        </ul>
    </div>

    <div>
        @yield('konten')
    </div>

    <div>
        @include('master.footer')
    </div>
</body>

</html>
