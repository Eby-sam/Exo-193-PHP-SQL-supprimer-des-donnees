<?php

/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la base de données.
 */

try{
    $server = 'localhost';
    $db = 'exo_193';
    $user = 'root';
    $pass = '';

    $id = 2;
    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pass);
    $sql = "DELETE FROM user WHERE id = 1";
        if($bdd ->exec($sql) !== false){
           echo "l'entrée de l'id 1 a etait supprimé";
    }

    $sql = "TRUNCATE TABLE USER";
    if($bdd->exec($sql) !== false){
        echo "truncate efféctué ! ";
    }

    $sql = "DROP TABLE user";
    if($bdd->exec($sql) !== false){
        echo "la table est supprimé !";
    }

}

catch(PDOException $exception) {
    echo $exception->getMessage();
}