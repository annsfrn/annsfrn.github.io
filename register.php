<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form action="controller/daftar.php" method="post" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <label for="">Nama : </label>
                <input type="text" placeholder="" name="nama" required>
            </div>
            <div class="input-group">
            <label for="">Username : </label>
                <input type="text" placeholder="" name="username" required>
            </div>
            <div class="input-group">
            <label for="">Password : </label>
                <input type="text" placeholder="" name="password" required>
            </div>
            <div class="input-group">
            <label for="">Confirm Password : </label>
                <input type="text" placeholder="" name="cpassword" required>
            </div>
            <div class="input-group">
            <label for="">Level : </label>
            <select name="level" clas="level" required>
                <option value="" disable selected>Pilih Level</option>
                <option value="1">Administrator</option>
                <option value="2">Petugas</option>
                <option value="3">Siswa</option>
            </select>
            </div>
            <div class="input-group">
                <button class="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>