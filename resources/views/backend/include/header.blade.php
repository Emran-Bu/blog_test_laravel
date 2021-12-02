<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Blog Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="#!">Dashboard</a></li>
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('admin/category/create') ? 'active' : ''}} {{ request()->is('admin/category/index') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown" role="button">Category</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item {{ request()->is('admin/category/create') ? 'active' : '' }}" href="{{ route('admin.category.create') }}">Add category</a>
                        <a class="dropdown-item {{ request()->is('admin/category/index') ? 'active' : '' }}" href="{{ route('admin.category.index') }}">Manage Category</a>
                    </div>
                </li>
                {{-- {{ auth()->user()->name }} --}}
                <li class="nav-item"><a class="nav-link" href="{{ route('user_logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
