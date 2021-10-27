<html>
<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container float-right">
        @auth
            <span class="float-right badge bg-success">Welcome , {{ auth()->user()->name }} !</span>
            <a class="float-right btn btn-link " href="/logout" role="button">Logout</a>

            <a class="btn btn-primary " href="/tasks" role="button">Tasks</a>

        @else
            <div class="float-right">
                <a class="btn btn-primary" href="/login" role="button">Login</a>
                <a class="btn btn-primary" href="/register" role="button">Register</a>
            </div>



        @endauth
    </div>

</head>
<body>
<div class="container">

    {{ $slot }}
</div>

<div>

    @if (session()->has('success'))
        <div class="fixed-bottom text-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif


</div>
</body>
</html>


