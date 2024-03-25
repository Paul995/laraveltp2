<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head>
<body>
    @php
        $currentLang = App::getLocale(); 
    @endphp
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample03">
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
    
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">@lang('lang.text_users')</a>
                        </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Documents</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('forum.index')}}">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('documents.index')}}">Documents</a>
                            </li>
                        @endguest


                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">@lang('lang.text_login')</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">@lang('lang.text_logout')</a>
                            </li>
                        @endguest

                    </ul>
                  
                    <ul class="navbar-nav">
                        <li class="nav-item lang ms-auto">
                            <a class="nav-link {{ App::getLocale() == 'en' ? 'lang-en' : 'lang-fr' }}" href="{{ route('lang', $currentLang == 'en' ? 'fr' : 'en') }}">
                                {{ $currentLang == 'en' ? 'Français' : 'English' }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @if(Auth::check()) 
            <div class="navbar-nav welcome-container">
                <p class="welcome small nav-item ms-auto">@lang('lang.text_welcome'), {{ Auth::user()->nom }}!</p>
            </div>
        @endif
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container text-center">
            <span class="small">&copy; {{ date('Y') }} {{ config('app.name') }}. @lang('lang.text_footer').</span>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>