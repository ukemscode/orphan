<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <main class="login-container">
        <section class="login-card">
            <div class="login-header">
                <div class="icon-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-lock">
                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                <h2>Admin Login</h2>
                <p>Access the administrative dashboard</p>
            </div>

            <form>
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-input">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <input type="email" placeholder="admin@orphanage.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-input">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <input type="password" placeholder="Enter your password" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Sign In</button>
            </form>

            <div class="demo-info">
                <p class="demo-title">Demo Credentials:</p>
                <p>Email: admin@orphanage.com</p>
                <p>Password: admin123</p>
            </div>
            <div class="back-home">

                <a href="../index.php" >Back to Home</a>
            </div>
            <!-- <div class="back-home">
        <button>Back to Home</button>
      </div> -->
        </section>
    </main>
</body>

</html>