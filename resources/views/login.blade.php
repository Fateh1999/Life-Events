<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </div>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="/signup">Sign Up</a></p>
            </div>
        </form>
    </div>
    <div class="footer">
        <p>&copy; 2025 Life Events Gallery</p>
    </div>
</body>

</html>
