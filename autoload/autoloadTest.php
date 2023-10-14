<?php
spl_autoload_register(function ($classe){
    $path=$classe;
    if (DIRECTORY_SEPARATOR === '/') {
        $path=str_replace('\\','/',$classe);
    }
    require "$path.php";
});
$a = new A\A();
$b = new B\B();