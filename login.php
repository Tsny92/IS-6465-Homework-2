<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <main class="login-container">
        <h1>AirAsia Rewards System</h1>
        <h2>User Login</h2>

        <form action="card-list.php" method="get">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username"
                       name="username"
                       placeholder="Enter Username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password"
                       placeholder="Enter Password" required>
            </div>

            <button type="submit" class="btn-primary">Login</button>
        </form>
    </main>

</body>
</html>
