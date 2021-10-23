<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dee4ebf33c.js" crossorigin="anonymous"></script>
    <title>Admin Community</title>
</head>
<body>
    <div class="listener">
        <div class="navigate">
            <div class="icn-header">
                <i class="fas fa-globe"></i>
                <h1><span>A</span>dminPanel</h1>
            </div>
            <div class="user">
                <form action="">
                    <input type="text" name="name" required>
                    <input type="password" name="password" required>
                    <button onclick="submit">LogIn</button>
                </form>
            </div>
        </div>
        <div class="bg">
            <div class="doc">
                <p> 
                    We are going to build a registration system that keeps track of 
                    which users are <span><b>admin</b></span> and which are normal users. The normal users 
                    in our application are not allowed to access admin pages. All 
                    users (Admins as well as normal users) use the same form to login. 
                    After logging in, the normal users are redirected to the index page 
                    while the admin users are redirected to the admin pages.
                </p>
            </div>
            <div class="signup">
                <form class="Signup" action="" id="sign-in">
                    <i class="fas fa-user-secret"></i>
                    <h2>Account SignUp</h2>
                    <label for="">UserName</label>
                    <input id="username" type="text" name="username" required>
                    <label for="">PassWord</label>
                    <input id="password" type="passwd" name="password" required>
                    <label for="">Re-Passwd</label>
                    <input id="passwd" type="passwd" name="Re-Passwd" ><br>
                    <button type="submit">Logger</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <h3>Developer Tools</h3>
            <h3>Management</h3>
        </div>
    </div>
    <script src="/JScript/server.js"></script>
</body>
</html>