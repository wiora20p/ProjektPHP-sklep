<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz</title>
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
    <main class="main-logowanie">
        <form action="czy_jest.php" method="POST">
            <input type="text" name="login" placeholder="Nazwa użytkownika" autofocus="" required="required"><br>
            <input type="password" name="haslo" placeholder="Hasło" required="required">

            <input type="submit">
        </form>
        <p>Nie posiadasz konta? <a href="rejestracja.php">Zarejestruj się</a></p>
    </main>
    <footer>Moja strona</footer>
</body>
</html>