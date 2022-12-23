<?php
include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';

function loadtemplates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/_templates/$name.php";
}