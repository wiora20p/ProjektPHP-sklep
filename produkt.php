<?php
ob_start();
session_start();
include 'czyZalogowany.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="menu-gorne">
                <a href="index.php"><img src="img/Logo.png" alt="logo" height="40px"></a>
                <form class="szukaj" action="wyszukiwarka.php" method="POST" > <!-- wysyła dane wyszukiwania do kodu znajdującego się poniżej -->
                    <input name="wyszukiwarka" type="text" class="wyszukiwarka" placeholder="Co szukasz?">
                    <input type="submit" value="szukaj">
                </form>
                <?php 
                if(!isset($_SESSION ["login"]))
                    echo '<a href="logowanie.php">logowanie</a>';
                else{
                    echo $_SESSION ["login"];
                    echo '<a href="wyloguj.php">wyloguj się</a>';
                }
                ?>
        </nav>
    </header>
    <aside>
        <ol>
            <a href="index.php"><li>Moda</li></a> 
            <li>Zabawki</li>
            <li>Książki</li>
            <li>AGD</li>
            <li>Artykuły biurowe</li>
            <li>Artykuły budowlane</li>
            <li>dom i ogród</li>
            <li>Zwierzęta</li>
            <li>Uroda</li>
            <li>Sztuka</li>
            <li>Supermarket</li>
            <li>Motoryzacja</li>
            <li>Nieruchomości</li>
            <li>Sport</li>
        </ol>
    </aside>
    <main>
        
    </main>
    <footer>Moja strona</footer>
    


</body>
</html>