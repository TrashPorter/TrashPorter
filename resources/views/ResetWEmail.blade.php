<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password with Email</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/ResetPass.css">
</head>
<body>
    <div class="head">
        <img src="assets/img/logo yg bener.PNG" alt="gambar">
    </div>

    <div class="isi">
        <div class="logo">
            <img src="assets/img/sepeda_logo.png" alt="gambar">
            <p>Reset Password</p>
        </div>

        <form action="" method="post">
            <fieldset>
                <label for="gmail">Email
                    <input type="email" id="gmail" name="gmail" required>
                </label>
                <div class="tmblR">
                    <input type="submit" value="Reset Password" class="btnReset" >
                </div>

                <div class="tengah">
                <label for="code">Enter Code
                    <input type="text" inputmode="numeric" id="code" pattern="\d{5}" name="code" required>
                </label>
                </div>

                <label for="newPswrd">New Password
                    <input type="password" name="newPswrd" id="newPswrd" required>
                </label>
                <label for="rptPswrd">Repeat Password
                    <input type="password" name="rptPswrd" id="rptPswrd" required>
                </label>

                <div class="tmblD">
                    <input type="submit" value="Done" class="btnDone" >
                </div>
            </fieldset>
        </form>

        <div class="inline">
        <a href="ResetWNumber.html"><p>Reset with number<p></a>
        </div>
    </div>
</body>
</html>