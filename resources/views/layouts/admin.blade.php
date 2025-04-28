<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tata Pemerintahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @yield('styles')
    <style>
        body {
            background-color: #ffffff;
        }
        #sidebar {
            min-height: 100vh;
            width: 250px;
            transition: all 0.3s;
            background-color: #212529 !important;
        }
        #sidebar.collapsed {
            margin-left: -250px;
        }
        .sidebar-link {
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }
        .sidebar-link:hover, .sidebar-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        .sidebar-link.active {
            border-left: 4px solid #0d6efd;
            background: rgba(255, 255, 255, 0.15);
        }
        .sidebar-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        .nav.flex-column .border-top {
            margin: 1rem 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.1), transparent);
            height: 1px;
        }
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
        #content {
            width: 100%;
            transition: all 0.3s;
        }
        /* Add these new styles */
        .navbar {
            background-color: #212529 !important;
        }
        .btn-dark {
            background-color: transparent;
            border: none;
        }
        .btn-dark:hover {
            background-color: rgba(255, 255, 255, 0.1);
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
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
