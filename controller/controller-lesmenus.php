<?php
session_start();
require_once '../model/database.php';
require_once '../model/model_lesmenus.php';


$showMenuClientSideObj = new Menus;

$menusArray = $showMenuClientSideObj->showMenuClientSide();
