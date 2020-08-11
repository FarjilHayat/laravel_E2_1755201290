<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
        @include ('layout.navbar')
        <div class="container-fluid">
                
                <div class="row mt-2">
                    <div class="col-md-2">
                    @include ('layout.sidebar')
                    </div>
                    <div class="col-md-10">
                        @include ('layout.breadcrumb')
                        @yield ('content')   
                    </div>
                
                </div>
        </div>
       
</body>
</html>