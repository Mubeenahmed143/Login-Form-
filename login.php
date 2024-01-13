<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Form</title>
    <link rel="shortcut icon" href="./title icon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <i class='bx bx-user'></i>
</head>
<body>

<div class="wrapper">
    <form action="">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="UserName" required >
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder="Password" required >
            <i class='bx bxs-lock-alt'></i>
        </div>

        <div class="remember-forget">
            <label><input type="checkbox"> Remember me</label>

            <a href="#">forget password</a>  

        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
            <p>Don't have an account? <a href="#">Register</a></p>
        </div>

    </form>
</div>

</body>
</html>