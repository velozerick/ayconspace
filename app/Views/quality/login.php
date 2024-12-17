<?php
    $session = session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://qty.ayconcursos.space/css/login_style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Welcome back!</header>
            <?php print_r($session->name); ?>

<form action="signIn" method="POST">
<?= csrf_field() ?>
                <div class="field input">
                    <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                <input type="submit" class="btn" name="submit" value="Sign in" required>
                </div>

                <div class="links">
                    Don't have an account? <a href="<?php echo site_url('/register');?>"> Sign up</a>
                </div>

                <?php if(isset($error)){ ?>
                     <div class="alert alert-danger">
                     <?php echo $error; ?>
                     </div>
                     <?php } ?>
            </form>

        </div>

    </div>
</body>
</html>