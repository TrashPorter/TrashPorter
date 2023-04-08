<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="assets/css/daftarAkun.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="head">
        <img src="assets/img/logo yg bener.PNG" alt="logo">
    </div>

    <div class="isi">
        <div class="logo">
            <img src="assets/img/sepeda_logo.png" alt="gambar">
            <p>CREATE ACCOUNT</p>
        </div>

        <form action="login.html" method="post">
            <fieldset>
                <label for="nomor">Phone
                    <input type="tel" id="nomor" name="nomor" required pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$">
                </label>
                <label for="gmail">Email
                    <input type="email" id="gmail" name="gmail" required>
                </label>
                <label for="pass">Password
                    <input type="password" id="pass" name="pass" required>
                </label>
                <label for="tipeAcc">
                    <select name="tipeAcc" id="tipeAcc">
                        <option value="">Type Account</option>
                        <option value="pengelola">Pengelola Sampah</option>
                        <option value="driver">Driver</option>
                        <option value="warga">Masyarakat</option>
                    </select>
                </label>
                
                <div class="tombol">
                    <input type="submit" value="Cancel" class="btn cancel">
                </div>
                <div class="tombol2">
                    <input type="submit"  value="Submit" class="btn done">
                </div>
            </fieldset>
        </form>

</body>
</html>
