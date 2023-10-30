<?php
include("fct/request.php");
include("fct/item.php");
include("config/app.php");

#recuperer dans la methode poste l'item a editer qui renvoye 2 valeur le resultat et le id
$resultEditItem = post('resultEditItem');
$id = post('hiddenID');

#recuperer le data
$Items = getItem();
#modifier le data qui correspond a l'id de l'item a editer
$Items[$id]['item'] = $resultEditItem;

#sauvegarder les reste
saveItem($Items);


header("Location:index.php");

?>