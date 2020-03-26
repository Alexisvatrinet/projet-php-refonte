<?php
    //connection à la base
    try{
        $bdd = new PDO('mysql:host=localhost; dbname=php-refonte;charset=utf8','root','');
    }
    catch(Exception $e)
    {
        die('Erreur vous concernant : '.$e->getMessage());
    }
    ?>