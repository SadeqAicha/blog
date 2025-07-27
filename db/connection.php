<?php
$pdo = new PDO("mysql:host=localhost;dbname=myblog;charset:utf8",'root','');
if(!isset($pdo)){
    exit;
}