<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Připojení k databázi
    $servername = "sql.endora.cz:3310";
    $username = "adminxdddddd";
    $password = "Admin1234";
    $dbname = "spravafirmy";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kontrola připojení
    if ($conn->connect_error) {
        die("Připojení k databázi selhalo: " . $conn->connect_error);
    }

    // Získání hodnot z formuláře
    $jmeno = $_POST["name"];
	$email = $_POST["email"];
	$heslo = $_POST["password"];
    $heslo2 = $_POST["password2"];

    // Ochrana proti SQL injection
    $jmeno = mysqli_real_escape_string($conn, $jmeno);
	$email = mysqli_real_escape_string($conn, $email);
    $heslo = mysqli_real_escape_string($conn, $heslo);
	$heslo2 = mysqli_real_escape_string($conn, $heslo2);

	if($jmeno == "")
	{
		$message = "Zadejte jméno!";  
        header("Location: registracestranka.php?message=" . urlencode($message));
	}
	else if($email == "")
	{
		$message = "Zadejte email!";  
        header("Location: registracestranka.php?message=" . urlencode($message));
	}
	else if($heslo == "")
	{
		$message = "Zadejte heslo!";  
        header("Location: registracestranka.php?message=" . urlencode($message));
	}
	else if(mb_strlen($heslo) < 5)
	{
		$message = "Heslo je příliš krátké!";  
        header("Location: registracestranka.php?message=" . urlencode($message));
	}	
	else
	{
		if($heslo == $heslo2)
		{
			// Dotaz na databázi pro ověření přihlašovacích údajů
			$query = "INSERT INTO zamestnanci(jmenoaprijmeni, email, heslo) VALUES ('$jmeno', '$email', '$heslo')";
			$result = mysqli_query($conn, $query);

			// Kontrola výsledků dotazu
			if ($result) {
				// Úspěšné přihlášení
				$_SESSION['prihlasenyuzivatel'] = $jmeno;
				header("Location: domu.php");
			} else {
				// Neúspěšné přihlášení
				$message = "Chyba!";  
				header("Location: registracestranka.php?message=" . urlencode($message));
			}
		}
		else{
			$message = "Hesla se neshodují!";  
			header("Location: registracestranka.php?message=" . urlencode($message));
		}
	}
    // Zavření připojení k databázi
    $conn->close();
}
?>
