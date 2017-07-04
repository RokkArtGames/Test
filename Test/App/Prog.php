<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 05.07.2017
 * Time: 1:06
 */


namespace Aps;


 use Ventor\ARct\Father;

 class MyRoom extends Father
{

    public  function  __construct()
    {
        parent::OnDraw();
        echo('Hello World');
    }

/**
 * Привет комент
 *
 *
 *
 */

}