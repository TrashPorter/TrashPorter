<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
  @vite('resources/css/app.css')

</head>
<body>
    <div class="head">
        <img src="assets/img/logo yg bener.PNG" alt="gambar">
    </div>

    <div class="isi">
        <div class="logo">
            <img src="assets/img/sepeda_logo.png" alt="gambar">
            <p>LOGIN</p>
        </div>

        <form action="#" method="post">
            <fieldset>
                <label for="gmail">Email
                     <input type="email" id="gmail" name="gmail" required>
                </label>

                <label for="pass">Password
                    <input type="password" id="pass" name="pass" required>
                </label>

                <div class="tmbl">
                    <input type="submit" value="Login" class="btnlogin" >
                </div>
            </fieldset>
        </form>

        <p class="pass"><a href="ResetWEmail.html" >Forgot Password?<p></a>
            <p>Tidak memiliki akun? <a href="daftarAkun">Daftar disini</a></p>
    </div>  

    
</body>
</html>