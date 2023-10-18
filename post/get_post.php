<?php
foreach ($_GET as $cle => $value) {
    if(strlen($value)>0){
        echo "$cle = $value <br>";
    }
}
foreach ($_POST as $cle => $value) {
    echo "$cle = $value <br>";
}
