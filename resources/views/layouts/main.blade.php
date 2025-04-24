<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Tata Pemerintahan Kota Semarang')</title>
    <link rel="icon" type="image/png" href="/img/rel.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Inconsolata:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        .hover-grow {
            display: inline-block;
        }

        .hover-grow:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            z-index: 20;
            background-color: #333;
            color: white;
        }
        .dropdown-content a {
            color: white;
        }
        header.sticky {
            transition: all 0.5s ease-in-out;
        }
        body {
            background-image: url('/img/background4.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        a:hover {
            text-decoration: underline;
        }
        .andika-font {
            font-family: 'Andika New Basic', sans-serif;
        }
        header.shrink {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .inconsolata-font {
            font-family: 'Inconsolata', monospace;
        }
        .judson-font {
            font-family: 'Judson', serif;
        }
        .arvo-font {
            font-family: 'Arvo', serif;
        }

        @yield('styles')
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="container mx-auto py-8">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Toggle Dropdown
            window.toggleDropdown = function(event, id) {
                event.stopPropagation(); // Menghentikan event propagasi
                const dropdown = document.getElementById(id);
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                } else {
                    dropdown.style.display = "block";
                }
            };

            // Shrink header on scroll
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (header && window.scrollY > 50) {
                    header.classList.add('shrink');
                } else if (header) {
                    header.classList.remove('shrink');
                }
            });

            // Close dropdowns when clicking outside
            window.addEventListener('click', function(event) {
                if (!event.target.matches('.dropbtn')) {
                    const dropdowns = document.getElementsByClassName("dropdown-content");
                    for (let i = 0; i < dropdowns.length; i++) {
                        const openDropdown = dropdowns[i];
                        if (openDropdown.style.display === "block") {
                            openDropdown.style.display = "none";
                        }
                    }
                }
            });
        });
    </script>

    <!-- Tambahan script dari halaman yang extend -->
    @yield('scripts')
</body>
</html>
