<!DOCTYPE html>
<html>
    <head>
        <title>Blackout</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stilark.css"> 
    </head>

    <body>
        <div class="grid-container">

            <div class="Meny" id="myTopnav">
                <nav>
                    <ul>
                        <li><a href="index.html">Hjem</a></li>
                        <li><a href="Underholdning.html">Events/Underholdning</a></li>
                        <li><a href="Utleie.html">Utleie</a></li>
                        <li><a href="Meny.html">Meny</a></li>
                        <li><a href="KontaktOss.html">Kontakt oss</a></li>
                      </ul>
                 </nav>
            </div>

            <div class="Header"id="grad1">
                    <h1></h1>
              </div>
              
                <div class="Main">

                <?php
			// Innloggingsinformasjon og spesifisering av kva database ein jobbar med
			$db_host = 'localhost';
			$db_user = 'root';
			$db_password = '';
			$db_db = 'matdatabase';
			$db_port = 3306;

			$mysqli = new mysqli(
				$db_host,
				$db_user,
				$db_password,
				$db_db
			);

			$mysqli->set_charset("utf8");
			
			// Kontroll om tilkoblingen til databasen fungerar (henta frå MAMP-startsida)
			if ($mysqli->connect_error) {
				echo 'Errno: '.$mysqli->connect_errno;
				echo '<br>';
				echo 'Error: '.$mysqli->connect_error;
				exit();
			}

			echo '<p>Success: A proper connection to MySQL was made.';
			echo '<br>';
			echo 'Host information: '.$mysqli->host_info;
			echo '<br>';
			echo 'Protocol version: '.$mysqli->protocol_version . "</p><br>";

       

			$mysqli->close();
		?>
                </div>
                <div class="Footer">
                  <table>
                    <tr>
                    <th>Kontakt oss:</th>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>MAIL</td>
                  </tr>
                  <tr>
                    <td>Telefon</td>
                    <td>90225158</td>
                  </tr>
                  <tr>
                    <td>Adresse</td>
                    <td>ADRESSE</td>
                  </tr>
                  </table>
                
                  <p> Logo</p>
                </div>
                </div>
        </div>
    </body>
</html>
