<?php

//role du routeur: se baser sur une information de la request et de charger un controller
if (isset($_REQUEST['controller'])) 
{
   if ($_REQUEST['controller'] == 'tache') 
   {
      require_once(PATH_SRC . DIRECTORY_SEPARATOR . "controllers" . DIRECTORY_SEPARATOR . "tache.controller.php");
   }
}
