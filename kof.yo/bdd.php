<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=kof.yo', 'root', 'root');
} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
}