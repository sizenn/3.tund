<?php
 
        // LOGIN.PHP
        $email_error = "";
        $password_error = "";
        // echo $_POST["email"];
 
        // kontrollime, et keegi vajutas input nuppu
        if($_SERVER["REQUEST_METHOD"] == "POST"){
               
                //echo "keegi vajutas nuppu";
               
                //vajutas login nuppu
                if(isset($_POST["login"])){
               
                        if(empty($_POST["email"]))  {
                                $email_error = "VEATEADE: Email on kohustuslik!";
                               
                               
                        }
                       
                        if(empty($_POST["password"])) {
                                $password_error = "VEATEADE: Parool on kohustuslik!";
                        } else {
                               
                                //kui oleme siia jõudnud siis parool ei ole tühi
                                //kontrollin et olek vähemalt 8 sümbolit pikk
                                if(strlen($_POST["password"]) < 8) {
                                       
                                        $password_error = "Parool peab olema vähemalt 8 tähemärki pikk!";
                                       
                                }
                        }
                       
                }
               
               
               
        }
?>
<?php
        $page_title = "Login leht";
        $page_file_name = "login.php";
?>
<?php require_once("../header.php"); ?>
<html>
<head>
        <title>sizen's login page</title>
        <meta charset="UTF-8">
</head>
<body>
                <h1>Logi sisse</h1>
                        <form action="login.php" method="post">
                                Kasutajanimi:<br>
                                <input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br>
                                Parool:<br>
                                <input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
                                <input name="login" type="submit" value="Logi sisse"><br>
                        </form>
<a href="register.php">Pole kasutajat? Registreeri siin!</a>
</body>
</html>
<?php require_once("../footer.php"); ?>