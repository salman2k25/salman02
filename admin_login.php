<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="admin_login_db.php" method="POST">
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
