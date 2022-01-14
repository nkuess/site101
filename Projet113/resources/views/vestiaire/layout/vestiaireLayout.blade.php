<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-web/css/all.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-web/css/brands.css') }}" type="text/css" />

    <script src="{{ asset('bootstrap4/js/bootstrap.js') }}" type="text/javascript"> </script>
    <script src="{{ asset('fontawesome-free-web/js/all.js') }}" type="text/javascript"> </script>
    <script src="{{ asset('fontawesome-free-web/js/brands.js') }}" type="text/javascript"> </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    
    <section class="container">
        
            
                @yield('InscriptionVestiaire')
                @yield('ConnexionVestiaire')
                @yield('main_admin')

                {{-- formulaire admins --}}
                @yield('add')
                @yield('show')
                @yield('liste')
                @yield('manage')
            

    </section>
</body>
</html>