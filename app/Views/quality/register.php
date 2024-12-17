<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://qty.ayconcursos.space/css/login_style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Create an account</header>
            <form action="signUp" method="POST" enctype="multipart/form-data">
            <div class="field input">
                    <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                </div>

                <div class="field input">
                    <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                <input type="submit" class="btn" name="submit" value="Sign up" required>
                </div>

                <div class="links">
                    Already have an account? <a href="<?php echo site_url('/login'); ?>"> Sign in</a>
                </div>
            </form>

        </div>

    </div>
</body>
</html>