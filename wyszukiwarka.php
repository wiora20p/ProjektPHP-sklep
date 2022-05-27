
<?php
ob_start();
$produkty = fopen("produkty.txt","r");
$wyszukiwarka = $_POST['wyszukiwarka'];

function Produkt($linia){
    
    $produkt = array(4);
    $produkt = mb_split("🍇", $linia);
    $nazwa = $produkt[0];
    $cena  = $produkt[1];
    $opis  = $produkt[2];
    $obraz  = $produkt[3];
    echo '<form action="produkt.php" method="POST" ><h3><b>'.$nazwa." - </b> ".$cena."zł</h3>".'<img src="img/'.$obraz.'" alt="obraz" style="width:100px"><input type="submit" value="Więcej"></form>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sklep</title>
</head>
<body>
    <header>
        <nav class="menu-gorne">
                <a href="index.php"><img src="img/Logo.png" alt="logo" height="40px"></a>
                <form class="szukaj" action="wyszukiwarka.php" method="POST" > <!-- wysyła dane wyszukiwania do kodu znajdującego się poniżej -->
                    <input name="wyszukiwarka" type="text" class="wyszukiwarka" placeholder="Co szukasz?">
                    <input type="submit" value="szukaj">
                    <!-- <label for="">
                        <img src="img/icons8-search-24.png" alt="szukaj">
                    </label> -->
                </form>
                <?php 
                if(!isset($_SESSION ["login"]))
                    echo '<a href="logowanie.php">logowanie</a>';
                else{
                    echo $_SESSION ["login"];
                    echo '<a href="wyloguj.php">wyloguj się</a>';
                }
                ?>
                    <!--  class="list-group-item" -->
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
    <main class="sklep">
    <?php
//  wyszukiwarka - znajduje w linijce napisany fragment (OK), potem segregacja od najbardziej zbliżonych do najmniej
    if (isset($_POST['wyszukiwarka'])){
        if (!empty($wyszukiwarka)) {
            //echo "<ul>\n";
            while(!feof($produkty)){
                $linia = fgets($produkty);
                if(strpos($linia, $wyszukiwarka)){ 
                    echo '<div class="produkt">';
                    Produkt($linia);
                    echo '</div>';
                }
                // else 
                //     echo "<li> Nie </li>";
            }
            //echo "</ul>";
        }
    }
    ?>
    </main>
    <footer>Moja strona</footer>
</body>
</html>