<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackthon</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Login Page/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" 
    crossorigin><link href="https://fonts.googleapis.com/css2? 
    family=Jost&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <img src="Login Page/assets/logo.png" alt="">
            <div class="nav-menu">
                <ul>
                    <a href="dashboard.html"><li>Dashboard</li></a>
                    <li>Payment</li>
                    <li>Timeline</li>
                </ul>
            </div>
            <a href="logout.html"><p>Logout</p></a>
        </div>
    </nav>
    <section class="loginpage">
        <div class="row">
            <div class="column">
                <h2>Login Team</h2>
                <div id="inputNamaTeam">
                    <label for="namaTeam"></label>
                    <input type="text" placeholder="Nama Team">
                </div>
                <div id="inputPW">
                    <label for="Password"></label>
                    <input type="password"      placeholder="Password">
                </div>
                <button id="submit">LOGIN</button>
                <div class="post-button-text">
                    <a href="#"><p>Register</p></a>
                    <a href="#"><p>Forgot Password?</p></a>
                </div>
            <div class="column"></div>
          </div>
    </section>
</body>
</html>