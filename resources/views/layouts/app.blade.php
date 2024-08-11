<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Include Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-auto sidebar" id="sidebar">
                @include('partials.sidebar')
            </div>
            <!-- Secondary Sidebar (initially hidden) -->
            <div class="col-auto sidebar d-none" id="sidebar2">
                @include('partials.sidebar2')
            </div>
            <!-- Main Content -->
            <div class="col-md-9" id="main-content">
                <!-- Top Navbar -->
                <nav class="navbar navbar1 p-3 navbar-light bg-grey shadow rounded-bottom">
                    <div class="d-flex w-100">
                        <button class="btn btn-outline-secondary" id="menu-toggle">
                            <i class="fas fa-bars fs-4"></i>
                        </button>
                        <span class="mx-auto h1 text-dark">Dashboard</span>
                        <div>
                            <img src="img\dummy-logo-5b2.png" alt="" class="w-75">

                        </div>
                    </div>
                </nav>




                @yield('content')
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS to handle the sidebar toggle -->
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            var sidebar = document.getElementById("sidebar");
            var sidebar2 = document.getElementById("sidebar2");
            var content = document.getElementById("main-content");

            // Toggle main sidebar
            sidebar.classList.toggle("d-none");
            // Toggle secondary sidebar
            sidebar2.classList.toggle("d-none");

            // Adjust main content width based on sidebar visibility
            if (sidebar.classList.contains("d-none")) {
                content.classList.remove("col-md-8");
                content.classList.add("col-md-11");
            } else {
                content.classList.remove("col-md-11");
                content.classList.add("col-md-8");
            }
        });
    </script>
</body>
</html>
