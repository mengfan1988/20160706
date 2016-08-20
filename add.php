<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link=new PDO('mysql:dbname=pdo;host=127.0.0.1;charset=utf8','root','');
$uname=$_GET['sname'];
$age=$_GET['age'];
$query="insert into users(uname,age)values('$uname','$age')";
$link->query($query);
echo "确认添加吗";