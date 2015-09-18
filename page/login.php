<?php
 
        // LOGIN.PHP
        $email_error = "";
        $password_error = "";
		$name_error = "";
		$name = "";
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
				
				//vajutAS create nuppu
				if(isset($_POST["create"])){
					if(empty($_POST["name"])) {
						$name_error = "VEATEADE: Nimi on kohustuslik!";
					}else {
						$name = test_input($_POST["name"]);
					}
				
				}
               
        }
		
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		
?>
<?php 
	$page_title = "Logi sisse";
	$file_name = "login.php";


?>
<?php require_once("../header.php"); ?>

<body>
                <h1>Logi sisse</h1>
                        <form action="login.php" method="post">
                                Kasutajanimi:<br>
                                <input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br>
                                Parool:<br>
                                <input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
                                <input name="login" type="submit" value="Logi sisse"><br>
						</form>
								
						<h2>Create user</h2>
						<form action="login.php" method="post">
							<input name="name" type="text" placeholder="Eesnimi Perenimi" value="<?php echo $name ?>" > <?php echo $name_error; ?><br><br>
							<input name="create" type="submit" value="Loo kasutaja" > <br><br>
							</form>
<a href="register.php">Kasutaja puudub? Registreeri siin!</a>
</body>
</html>
<?php require_once("../footer.php"); ?>