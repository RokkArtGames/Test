<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 05.07.2017
 * Time: 10:05
 */
namespace App;

class IDo
{


    public function Walk($ItIsRey = false,$Tmp)
    {
      if($ItIsRey==true){

         echo "Дождливая погода \n, температура -$Tmp";

      }else {

          echo "Отличная погода";

      }
    }


}