<?php
/**
 * si le nom existe dans la methode post ou get
 *      returner la valeur du poste sous forme chaine de character
 * sinon
 *      return vide
 */
function post($name , $default = NULL){
    if(isset($_POST[$name])){
        return htmlentities($_POST[$name]);
    }else{
        return $default;
    }
}

function get($name , $default = NULL){
    if(isset($_GET[$name])){
        return htmlentities($_GET[$name]);
    }else{
        return $default;
    }
}