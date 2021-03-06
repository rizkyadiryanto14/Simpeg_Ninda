<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Register Form</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="build/images/sditlogo.ico" alt="">
        </div>
        <div class="text-center mt-4 name">
            REGISTER
        </div>
        <form class="p-6 mt-6" action="check_login.php" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="ussername" id="ussername" placeholder="Ussername">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nip" id="nip" placeholder="NIP">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button class="btn mt-3" type="submit" name="login">REGISTER</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="index.php">LOGIN</a>
        </div>
    </div>
</body>

</html>