<?php 
 function displayItem($id ,$item){
    $item = $item['item'];
    $itemEdit = get('itemEdit');

    if($itemEdit === $id){
        return ('
        <form action="editItem.php?" method="POST">
            <input type="hidden" name="hiddenID" value = '.$itemEdit.'>
            <input type="text" name="resultEditItem" id="item" value ='.$item.'>
            <span class="btm-submit">
                <button type="submit">ok</button>
            </span>
        </form>
        ');
    }else{
    return ('
        <ul>
            <li>
                <input type="checkbox" name="item" id='.$id.' value = '.$item.'> '.$item.'
                    <div class="button">
                        <div class="delete">
                            <a href="deletItem.php?item='.$id.'">delete</a>
                        </div>
                        <div class="edit">
                            <a href="index.php?itemEdit='.$id.'">eidt</a>
                        </div>
                        
                    </div>
            </li>
        </ul>
        ');
    }

 }
 function saveItem($item = []){
    file_put_contents(FILE_NAME, serialize($item));
 }

function getItem(){
    return unserialize(file_get_contents(FILE_NAME));
}
?>
