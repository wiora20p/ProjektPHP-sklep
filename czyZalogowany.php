<?php
if(!isset($_SESSION ['login'])){
    header("Location:logowanie.html");
}