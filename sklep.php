<?php
ob_start();
//include 'czyZalogowany.php';
$produkty = file("produkty.txt");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="fixed-top">
        <nav class="menu-gorne">
                <a href="sklep.php"><img src="Logo.png" alt="logo" height="40px"></a>  <!--  class="list-group-item py-1" -->
                <form class="szukaj" action="sklep.php" method="POST" >
                    <input name="wyszukiwarka" type="text" class="wyszukiwarka" placeholder="Co szukasz?">
                    <input type="submit" value="szukaj">
                    <!-- <label for="">
                        <img src="icons8-search-24.png" alt="szukaj">
                    </label> -->
                </form>
                <a href="logowanie.php">logowanie</a>  <!--  class="list-group-item" -->
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
    $wyszukiwarka = $_POST['wyszukiwarka'];
    if (!empty($wyszukiwarka)) {
        echo "<ul>\n";
        $dane = file("dane.txt");
        // for ($index=0; $index < count($dane); $index++) {
        //     $g = split(" | ", chop($dane[$index]));
        //     $eregi = eregi($wyszukiwarka, $dane);

        //     if (@eregi($wyszukiwarka, $dane[$index])) {
        //         echo '<li><a href="'.$g[0].'" title="'.$g[1].'">'.$g[1]."</a></li>\n";
        //         $bl = true;
        //     }
        // }

        echo "</ul>";
    }

    //w przypadku braku wyników
    if (!$bl) {
        echo 'Brak wyników';
    }
?>

</body>
</html>
<!-- 
    foreach($file as $lina)
        strpos($file, $linia) - znajduje frazę w linii (moża w ten sposób szukać loginów - )
        str_contains($linia,$słowo) - czy jest w linii? (może weryfikować hasła)



        trello-tabele(projekty)
  -->