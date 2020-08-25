<?php
include('Form.php');
//***************************
$myform = new form("traitement.php","Accès au site","post");
$myform->settext("nom","Votre nom : &nbsp;");
$myform->settext("code","Votre code : ");
$myform->setsubmit();
$myform->getform();
?>
