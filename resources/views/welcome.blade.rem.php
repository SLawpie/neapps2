<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
 {{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;600;700&display=swap" rel="stylesheet">
 --}}

        <!-- Styles -->
{{--         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         --}}
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--         <style>
            html, body {
                /* background-image: url("{{ asset('images/patterns/what-the-hex-dark.png') }}"); */
                background-color: rgb(243 244 246);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

             .title {
                font-size: 6vmax;
            }
        </style> --}}
    </head>
    <body class="antialiased">
        <div class="container bg-secondary" style="height: 100vh">
{{--             <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <a class="navbar-brand" href="#"></a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                    <ul class="navbar-nav me-4">
                        <!-- Autentication Links -->
                        @guest
                            <li class="nav-item text-uppercase">
                                <a class="nav-link upercase" href="{{ route('login') }}">{{ __('welcome.login') }}</a>
                            </li>
                        @else
                            <li class="nav-item text-uppercase">
                                <a class="nav-link upercase" href="{{ route('dashboard') }}">{{ __('welcome.dashboard') }}</a>
                            </li>
                        @endguest
                    </ul>
                  </div>
                </div>
              </nav> --}}
    
            <div class="row align-items-center text-center" style="height: 100%">             
                <div class="col-md-12">
                    <div class="title">
                        {{config('app.name')}}&sup2;
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
