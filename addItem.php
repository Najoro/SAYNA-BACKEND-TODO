<?php
    #importation
    include('fct/request.php');
    include('fct/item.php');
    include('config/app.php');

    # insertion du donne dans la methode post
    $item = post('item');
    
    #inserer mes donne du post dans un fichier file
    $get_item = getItem();

    #creer mon repertoire avec une cle aleatoire et une valeur du tableaux "item""
    $get_item[uniqid()] = ['item' => $item];
    saveItem($get_item);    
    
    #le page a afficher
    header("Location:index.php");
?>