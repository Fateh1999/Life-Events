<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Events Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/asset/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Life Events Gallery of</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-primary btn-sm ms-3" id="addPhotoBtn">Add Photo</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger btn-sm ms-3" href="/login">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <strong>{{ $message }}</strong>
    </div>
@endif

    @yield('main')

     <!-- Footer -->
     <div class="footer">
        <p>&copy; 2025 Life Events Gallery. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>