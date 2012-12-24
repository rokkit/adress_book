<?php
    $link = new mysqli("http://mysql-env-6698993.jelastic.servint.net","root","EssKAYcLPa","adress_book");
    $id=$_GET['id'];//из гет запроса забираем номер записи
    if($link->query("DELETE FROM Contact WHERE id=$id"));
?>
