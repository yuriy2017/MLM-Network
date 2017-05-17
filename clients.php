<?php

require_once 'data.php'

//array cycle with $ item output for each object
foreach ($clients as $item){
    echo '<pre>';
    print_r($item->printItem());
    echo '</pre>';

}


?>