<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>  
        <div>
            <a href="/create">Ajouter votre tache</a>
        </div>
    </nav>


    {{-- =========== session for success of the Create f Update ========= --}}
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    {{-- ================================================================ --}}



    <div>
        @yield('content')
    </div>
</body>
</html>