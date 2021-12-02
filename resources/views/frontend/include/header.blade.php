<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Blog Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link {{ request()->is('user-register-form') ? 'active' : '' }}" aria-current="page" href="{{ route('user-register-form') }}">Registration</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('user-login-form') ? 'active' : '' }}" href="{{ route('user-login-form') }}">Login</a></li>
                @endguest
                @auth
                {{-- {{ auth()->user()->name }} --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('user_logout') }}">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
