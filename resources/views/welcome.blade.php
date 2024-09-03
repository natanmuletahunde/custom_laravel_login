<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Amazing Laravel Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Header -->
    <header class="bg-primary text-white p-4 shadow-lg">
        <div class="container">
            <h1 class="display-4">Welcome to My Laravel Website</h1>
            <p class="lead">Building something awesome with Laravel</p>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-dark text-white text-center" style="background-image: url('https://source.unsplash.com/random/1600x900'); background-size: cover; background-position: center; height: 100vh;">
        <div class="d-flex align-items-center justify-content-center h-100 bg-dark bg-opacity-75">
            <div>
                <h2 class="display-2 font-weight-bold mb-4">Laravel is Amazing</h2>
                <p class="lead mb-5">Learn, Build, and Deploy with Laravel</p>
                <a href="#" class="btn btn-primary btn-lg">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container py-5">
        <h2 class="text-center display-4 mb-5">Features</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">Fast & Reliable</h3>
                        <p class="card-text">Laravel provides a clean and beautiful syntax, making it easy to build powerful applications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">Scalable</h3>
                        <p class="card-text">Whether you're building small or large applications, Laravel scales with your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">Community</h3>
                        <p class="card-text">Join a vibrant community of developers who are passionate about Laravel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} My Laravel Website. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
