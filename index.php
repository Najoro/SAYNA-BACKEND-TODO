<?php
include('config/app.php');
include('html/header.php');
include('fct/item.php');
include("fct/request.php");
if(!file_exists(FILE_NAME))
{
   saveItem([]);
}
?>
<header>
    <div class="logo">
        <img src="img/sayna.png" alt="sayna">
    </div>
</header>

<div class="todo">
    <h1 class="title"><?= APP_NAME ?></h1>
    <div class="add-items">
        <form action="addItem.php" method="POST">
            <input type="text" name="item" id="item">
            <button type="submit">+</button>
        </form>
    </div>
    <div class="result-items">

            <?php 
                $items = getItem();
                foreach($items as $key => $item){
                    echo displayItem($key ,$item);
                }
            ?>
    </div>
</div>

<?php include('html/footer.php')?>
