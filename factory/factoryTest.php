<?php
require "Classes.php";
$cam =  new TruckTransportFactory();
try
{
    $cam ->deliver();
}
catch (Exception $e)
{

}
$bato = new ShipTransportFactory();
try
{
    $bato ->deliver();
}
catch (Exception $e)
{

}



