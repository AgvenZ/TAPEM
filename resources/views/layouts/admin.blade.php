<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tata Pemerintahan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/rel.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @yield('styles')
    <style>
        :root {
            --primary-color: #212529;
            --accent-color: #3498db;
            --hover-color: rgba(52, 152, 219, 0.1);
            --text-color: #ecf0f1;
            --border-color: rgba(236, 240, 241, 0.2);
        }
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        #sidebar {
            min-height: 100vh;
            width: 250px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: var(--primary-color);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        #sidebar.collapsed {
            margin-left: -250px;
            box-shadow: none;
        }
        .sidebar-link {
            padding: 12px 20px;
            color: var(--text-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            border-radius: 8px;
            margin: 4px 8px;
        }
        .sidebar-link:hover, .sidebar-link.active {
            background: var(--hover-color);
            color: var(--accent-color);
            transform: translateX(5px);
        }
        .sidebar-link.active {
            border-left: 4px solid var(--accent-color);
            background: var(--hover-color);
            font-weight: 600;
        }
        .sidebar-link i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            transition: transform 0.3s;
        }
        .sidebar-link:hover i {
            transform: scale(1.1);
        }
        .nav.flex-column .border-top {
            margin: 1.2rem 15px;
            border: none;
            height: 2px;
            background: linear-gradient(to right, transparent, var(--border-color), transparent);
        }
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
                position: fixed;
                z-index: 1000;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
        #content {
            width: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #f8f9fa;
        }
        .navbar {
            background: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .btn-dark:hover {
            background-color: var(--hover-color);
            color: var(--accent-color)        
        }
        .container-fluid {
            padding: 2px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-dark">
            <div class="p-3">
                <h3 class="text-white">Admin Panel</h3>
            </div>
            <div class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="{{ route('admin.pages.index') }}" class="sidebar-link {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i> Pages
                </a>
                <a href="{{ route('admin.news.index') }}" class="sidebar-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
                    <i class="fas fa-newspaper"></i> News
                </a>
                <a href="{{ route('admin.media.index') }}" class="sidebar-link {{ request()->routeIs('admin.media.*') ? 'active' : '' }}">
                    <i class="fas fa-images"></i> Media Library
                </a>
                <a href="{{ route('admin.slideshows.index') }}" class="sidebar-link {{ request()->routeIs('admin.slideshows.*') ? 'active' : '' }}">
                    <i class="fas fa-film"></i> Slideshow
                </a>
                <div class="border-top border-secondary my-2"></div>
                <a href="{{ route('admin.users.index') }}" class="sidebar-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i> Users
                </a>
                <a href="{{ route('admin.settings.index') }}" class="sidebar-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="border-top border-secondary my-2"></div>
                <a href="/" class="sidebar-link" target="_blank">
                    <i class="fas fa-globe"></i> View Website
                </a>
            </div>
        </nav>

        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background: var(--primary-color)">
                <div class="container-fluid" style="background: var(--primary-color)">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/toast.js"></script>
    @yield('scripts')
    <script>
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth <= 768) {
                sidebar.classList.toggle('active');
            } else {
                sidebar.classList.toggle('collapsed');
            }
        });

        // Handle responsive sidebar
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('collapsed');
                if (!sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                }
            } else {
                sidebar.classList.remove('active');
            }
        });

        // Show toast for success messages
        @if(session('success'))
            showToast("{{ session('success') }}", 'success');
        @endif
    </script>
    <script src="{{ asset('js/code-editor.js') }}"></script>
</body>
</html>
