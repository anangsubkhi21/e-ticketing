<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <div class="kotak-login">
        <h3>E-Tikecting Pesawat</h3>
        <h4>Log In Your Account</h4>

        <form action="process.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control">

            <button type="submit" name="login">Login</button>
            <b><p>Belum punya Akun? Silahkan <a href="../register/index.php">Silahkan buat disini</a></p></b>
        </form>
    </div>
</body>
</html>