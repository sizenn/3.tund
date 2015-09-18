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
                               
                                //kui oleme siia j�udnud siis parool ei ole t�hi
                                //kontrollin et olek v�hemalt 8 s�mbolit pikk
                                if(strlen($_POST["password"]) < 8) {
                                       
                                        $password_error = "Parool peab olema v�hemalt 8 t�hem�rki pikk!";
                                       
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