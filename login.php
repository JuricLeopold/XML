<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Royal</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/e3fe3350f1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
        <div id="container2">
            <form action="" method="post">
                <h2>Login</h2>
                <div class="div" id="username">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder=" ">
                    <label for="username">Korisničko ime</label>
                </div>
                <div class="div" id="lozinka">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder=" ">
                    <label for="password">Lozinka</label>
                </div>
                <button type="submit">Prijava</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php

	$username="";
	$password="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["username"]))  {
				echo "
                    <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Korisničko ime nije uneseno</div>
                ";
		} else if (empty($_POST["password"])) {
			echo "
                <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Lozinka nije unesena</div>
            ";
		} else {

			$username = $_POST["username"];
			$password = $_POST["password"];
		
			$xml=simplexml_load_file("users.xml");
		
			foreach ($xml->user as $user) {
				$xml_username = $user->username;
				$xml_password = $user->password;
				$xml_ime = $user->ime;
				$xml_prezime = $user->prezime;
				if ($xml_username == $username) {
					if($xml_password == $password) {
						echo "
                            <div style='position:absolute; top:5%; left:2%; color:white; font-size:26px; font-weight:900;'>
                                Prijavljeni ste kao <span style='color: #DCCA87;'>$xml_ime $xml_prezime,</span>
                                <a href='index.php' style='color:#DCCA87'>Nastavi</a>
                            </div>
                        ";
						return;
					} else {
						echo "
                            <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Netočna lozinka</div>
                        ";
						return;
					}
				}
			}

			echo "
                <div style='position:absolute; top:5%; left:2%; color:red; font-size:26px; font-weight:900;'>Korisnik ne postoji</div>
            ";
			return;
		}
	}

?>
