<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 05.07.2017
 * Time: 9:42
 *
 */

require __DIR__ .'/../App/IDo.php';

$Ido = new \App\IDo();
$ItsRain=true;
$Tmp="5 градусов тепла";
$Ido->Walk($ItsRain,$Tmp);