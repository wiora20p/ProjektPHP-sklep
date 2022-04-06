# ProjektPHP-sklep

## logowanie:
 - bez logowania -> przeglądanie
 - z zalogowaniem: 
   - zwykły (znacznik "normal") -> kupowanie i sprzedawanie 
   - admin (znacznik "admin") -> + usuwanie oferty

### logowanie - wygląd:
 - nazwa
 - hasło
 - przycisk "zaloguj" (sprawdza, czy użytkownik istnieje -> czy hasło poprawne)
 - link (nie masz hasła? "Zarejestruj się" -> <b>rejestracja</b>)
   
## rejestracja:
 - nazwa (jak nie istnieje)
 - hasło (min 6 znaków, 1 cyfra, 1 mała litera, 1 Wielka litera)
 - hasło2 -> sprawdzenie czy hasło jest takie same jak powyżej
 - mail -> mail(...);
 - przycisk "mam więcej niż 18 lat"
 - akceptacja regulaminu
 
 ## przysisk "kup":
 - sprawdzenie czy zalogowany (ma znacznik):
  - nie -> <b>logowanie</b>
  - tak -> przechodzi dalej

-----------------------------------------------------
link do tabeli: https://mathlear.atlassian.net/jira/software/projects/PS/boards/4

