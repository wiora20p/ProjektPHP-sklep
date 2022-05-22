<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Formularz</title>
</head>
<body>
    <header>
        <nav class="menu-gorne">
                <a href="index.php"><img src="img/Logo.png" alt="logo" height="40px"></a>
                <form class="szukaj" action="index.php" method="POST" > <!-- wysyła dane wyszukiwania do kodu znajdującego się poniżej -->
                    <input name="wyszukiwarka" type="text" class="wyszukiwarka" placeholder="Co szukasz?">
                    <input type="submit" value="szukaj">
                    <!-- <label for="">
                        <img src="img/icons8-search-24.png" alt="szukaj">
                    </label> -->
                </form>
                <?php 
                if(!isset($_SESSION ["login"]))
                    echo '<a href="logowanie.html">logowanie</a>';
                else{
                    echo $_SESSION ["login"];
                    echo '<a href="wyloguj.php">wyloguj się</a>';
                }
                ?>
                  <!--  class="list-group-item" -->
        </nav>
    </header>
    <main class="main-logowanie">
        <form action="czy_jest.php" method="POST">
            <input type="text" name="login" placeholder="Nazwa użytkownika" autofocus="" required="required"><br>
            <input type="text" name="haslo" placeholder="Hasło" required="required">

            <input type="submit">
        </form>
        <p>Nie posiadasz konta? <a href="rejestracja.php">Zarejestruj się</a></p>
    </main>
    <?php
//  wyszukiwarka - znajduje w linijce napisany fragment (OK), potem segregacja od najbardziej zbliżonych do najmniej
    if (isset($_POST['wyszukiwarka'])){
        $produkty = fopen("produkty.txt","r");
        $wyszukiwarka = $_POST['wyszukiwarka'];
        if (!empty($wyszukiwarka)) {
            echo "<ul>\n";
            while(!feof($produkty)){
                $linia = fgets($produkty);
                if(strpos($linia, $wyszukiwarka)){ 
                    echo "<li> Tak </li>";
                }
                else 
                    echo "<li> Nie </li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>