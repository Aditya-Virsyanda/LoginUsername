<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            // akun siswa
            if($_POST["username"] == "punyasiswa" &&
            $_POST["password"] == "punyasiswa"){
                header("Location: Siswa.php");
                exit;
            } 
            // akun admin
            else if($_POST["username"] == "admin11" &&
            $_POST["password"] == "admin11"){
                header("Location: SiswaAdmin.php");
            } else {
                $error = true;
            }
        }else{
            $kosong = true;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>User Login</h1>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <br>

            <label for="password">Password</label>
            <input type="password" name="password"id="password">
            <br>

            <?php
                if(isset($error)){
                    echo "Username atau Password salah!";
                }
                if(isset($kosong)){
                    echo "Isi kolom!";
                }
            ?>
            <br>
            <button type="submit" name="submit">kirim</button>
        </form>

    </body>
</html>