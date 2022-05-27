<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$plik = fopen("dane.txt", "r+") or die("Plik się nie wczytuje");
$plik1 = fopen("dane.txt", "a") or die("Plik się nie wczytuje");

echo $login." ".$haslo."<br>";

function Logowanie($login, $haslo, $plik){
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
            header("Location: index.php");
        }
        else{
            echo "Niepoprawne hasło";
            header("Location:logowanie.php");
        }
        break;

        
    }
    
}

function Rejestracja($login, $haslo, $plik, $plik1){
    echo "jestem <br><br>";
    $jest = 0;
    while(!feof($plik))
    {
        $line = fgets($plik);
        echo $line;

        $pos1=strpos($line, "🚪");

        if($pos1 === false){
            echo " ---BŁĄD--- ";
        } 

        echo $pos1;
        echo "<br>";
            
        $testLogin = substr($line, 0, $pos1);

        echo "Login: ".$testLogin." ".$login;
        echo "<br>";

        if($testLogin == $login){
            $jest ++;
            break;
        }
    }
    if ($jest>0){
        echo "taki login już stnieje";
        header("Location: rejestracja.php");
    }
    else{
        echo "Nie ma loginu jeszcze takiego";
        session_start();
        $_SESSION["login"] = $login;
        fwrite($plik1, "\n".$login."🚪".$haslo."💼");
        header("Location: index.php");
    }
}




if (isset($_POST['haslo2'])){
  if ($_POST['haslo'] === $_POST['haslo2']) {
    echo "GIT";
    Rejestracja($login, $haslo, $plik, $plik1);
  } 
  else
      echo "Podane hasla nie sa identyczne";
}
else
    Logowanie($login, $haslo, $plik);

// if(czyJest($login, $haslo, $plik)==false) echo "Niepoprawne logowanie";
//         else {
//             echo "Użytkownik " .$login." zostal zalogowany";
            
//         }
//     fclose($plik);

//explode(string $separator, string $string): array - pomocna dłoń
?>