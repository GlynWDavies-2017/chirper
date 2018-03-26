<?php 

    include 'database/connection.php';
    include 'classes/user.php';
    include 'classes/follow.php';
    include 'classes/chirp.php';

    global $pdo;

    session_start();

    $getFromUser = new User($pdo);
    $getFromChirp = new Chirp($pdo);
    $getFromFollow = new Follow($pdo);

    define("BASE_URL","http://localhost/chirper/");

?>