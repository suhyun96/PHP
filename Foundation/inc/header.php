<?php
    //지정되어 있지 않으면 빈값으로 지정해서 에러 안 나오도록 
    if(!isset($title)){
        $title="";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ;?></title>
</head>
<body>
    <h1><?= $title; ?></h1>