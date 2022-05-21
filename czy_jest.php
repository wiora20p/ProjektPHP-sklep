<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$plik = fopen("dane.txt", "r") or die("Plik się nie wczytuje");

echo $login." ".$haslo."<br>";

function czyJest($login, $haslo, $plik){
    echo "jestem <br><br>";
    while(!feof($plik))
    {
        $line = fgets($plik);
        echo $line;

        $pos1=strpos($line, "🚪");
        $pos2=strpos($line, "💼");

        if($pos1 === false){
            echo " ---BŁĄD--- ";
        } 

        echo $pos1;
        echo "<br>";
            
        $testLogin = substr($line, 0, $pos1);

        echo "Login: ".$testLogin." ".$login;
        echo "<br>";

        if($testLogin != $login) continue;
            
        $a = $pos2-$pos1;
        echo $pos1." ".$pos2." ".$a."<br>";
        $testHaslo = substr($line, $pos1 + 4, ($pos2-$pos1-4));
        echo "Hasło: ".$testHaslo." ".$haslo;
        echo "<br><br>";

        if($testHaslo == $haslo){
            session_start();
            $_SESSION["login"] = $login;
            echo "Witaj ".$_SESSION["login"]."!";
            header("Location: sklep.php");
        }
        else
            echo "Niepoprawne hasło";
        break;

        
    }
    
}

czyJest($login, $haslo, $plik);

// if(czyJest($login, $haslo, $plik)==false) echo "Niepoprawne logowanie";
//         else {
//             echo "Użytkownik " .$login." zostal zalogowany";
            
//         }
//     fclose($plik);

//explode(string $separator, string $string): array - pomocna dłoń
?>