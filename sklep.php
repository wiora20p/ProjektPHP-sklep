<?php
ob_start();
session_start();
//include 'czyZalogowany.php';
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
    <header class="fixed-top">
        <nav class="menu-gorne">
                <a href="sklep.php"><img src="img/Logo.png" alt="logo" height="40px"></a>
                <form class="szukaj" action="sklep.php" method="POST" > <!-- wysyła dane wyszukiwania do kodu znajdującego się poniżej -->
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
    <main>
        <aside>
            <ol>
                <li>Moda</li>
                <li>Zabawki</li>
                <li>Książki</li>
                <li>AGD</li>
                <li>Artykuły biurowe</li>
                <li>Sprzęt domowy</li>
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
    <article>
        <div class="obraz"></div>
        <h3><?php ?>
        </h3>
    </article>
    </main>
    <footer>afs</footer>

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
<!-- 
    foreach($file as $lina)
        strpos($file, $linia) - znajduje frazę w linii (moża w ten sposób szukać loginów - )
        str_contains($linia,$słowo) - czy jest w linii? (może weryfikować hasła)


//list($nazwa, $cena, $opis) = split(" . ", $linia); - nie wiadowo dlaczego nie czyta splita (pokazuje błąd)




        trello-tabele(projekty)
          _
         / \
        /   \
        |   |
        |___|
        przegląd po funkcjach w tablicy
        obiekty w php
  -->
