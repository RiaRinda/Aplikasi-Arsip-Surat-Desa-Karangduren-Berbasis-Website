<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Arsip')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cs_app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    @stack('head')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <div class="menu-title">Menu</div>
                <div>-------------------</div>
                <nav class="nav flex-column">
                    <a href="{{ route('arsip.index') }}" 
                       class="nav-link {{ request()->routeIs('arsip.*') ? 'active' : '' }}">
                        ★ Arsip
                    </a>
                    <a href="{{ route('kategori.index') }}" 
                       class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
                        ⚙ Kategori Surat
                    </a>
                    <a href="{{ route('about.index') }}" 
                       class="nav-link {{ request()->routeIs('about.*') ? 'active' : '' }}">
                        ℹ About
                    </a>
                </nav>
            </div>
            
            <div class="col-md-9 col-lg-10">
                <div class="main-content">
                    @if(session('success'))
                        <div id="success-alert" class="alert-custom">
                            {{ session('success') }}
                            <span class="alert-close" 
                                  onclick="document.getElementById('success-alert').style.display='none'">
                                &times;
                            </span>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </div>    
    @stack('scripts')
</body>
</html>