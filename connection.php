<?php
mysql_connect('localhost','root','');
mysql_select_db('sakila');
$query="select* from actor";
$result=mysql_query($query);
?>