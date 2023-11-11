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
    $email = $_POST["name"];
    $heslo = $_POST["password"];

    // Ochrana proti SQL injection
    $jmeno = mysqli_real_escape_string($conn, $jmeno);
    $email = mysqli_real_escape_string($conn, $email);
    $heslo = mysqli_real_escape_string($conn, $heslo);

    // Dotaz na databázi pro ověření přihlašovacích údajů
    $query = "SELECT * FROM zamestnanci WHERE (jmenoaprijmeni='$jmeno' OR email = '$email') AND heslo='$heslo'";
    $result = mysqli_query($conn, $query);

    // Kontrola výsledků dotazu
    if ($result && mysqli_num_rows($result) > 0) {
        // Úspěšné přihlášení
        $_SESSION['prihlasenyuzivatel'] = $jmeno;
        header("Location: domu.php");
    } else {
        // Neúspěšné přihlášení
        $message = "Nesprávné jméno nebo heslo!";  
        header("Location: index.php?message=" . urlencode($message));
    }

    // Zavření připojení k databázi
    $conn->close();
}
?>
