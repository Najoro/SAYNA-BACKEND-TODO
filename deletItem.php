<?php
#inclusion des fichier
include('fct/request.php');
include('fct/item.php');
include('config/app.php');

#recuper mes item depuit le fichier data/data.txt
$items = getItem();

#recuper depuit la methode get l' id(key) de l'item a supprimer
$id = get('item');

#supprimer l'id cibler
unset($items[$id]);

#sayvegarder dans le fichier data les reste de l'item 
saveItem($items);    


header("Location:index.php");

?>