<html>
<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <h1 class="text-center">Todos</h1>
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


