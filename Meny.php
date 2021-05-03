<!DOCTYPE html>
<html>
    <head>
        <title>Blackout</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="UnderSide.css"> 
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

            <div class="Header"id="grad4">
                    <h1>Meny</h1>
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
			
      // Hentar ut data frå databasen og skriv det ut til nettsida.
			// Basert på https://www.w3schools.com/php/php_mysql_select.asp
			$sql = "SELECT * From mat";
			$resultat = $mysqli->query($sql);

            echo "<table>";
            echo "<tr>";
                echo "<th>Mat</th>";
                echo "<th>Allergier</th>";
            echo "</tr>";

            while($rad = $resultat->fetch_assoc()) {
                $mat = $rad["mat"];
                $allergier = $rad["allergier"];

                echo "<tr>";
                    echo "<td>$tittel</td>";               
                    echo "<td>$aarstall</td>";
                    echo "<td>$firmanavn</td>";
                    echo "<td>$plattformnavn</td>";
                    echo "<td>$bilde</td>";
                echo "</tr>";
            }

            echo "</table>";
       

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
