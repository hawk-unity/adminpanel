<?php
$user = "admin";
$pass = "admin";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title> : Admin Panel : </title>
</head>
<body>
  <form class="box" action="login.php" method="post">
    <h1> Admin Login </h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="file" value="Login">
  </form>
<style>
body{
margin : 0;
padding: 0;
font-family:sans-serif;
background-color: #34495e;
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50% ;
  left: 50% ;
  transform: translate(-50%, -50%);
  background-color: #191919;
  text-align: center;

}
.box h1{
color: white;
text-transform: uppercase;
font-weight: 500;
}
.box input[type= "text"],.box input[type="password"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db ;
  padding: 14px 10px;
  width: 200px;
  outline:none;
  color: white;
  border-radius: 24px;
  transition: 0.255;
}
.box input[type= "text"]:focus,.box input[type="password"]:focus{
width: 280px;
border-color: #2ecc71 ;
}
.box input[type= "submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  width: 200px;
  outline:none;
  color: white;
  border-radius: 24px;
  transition: 0.255;
  cursor: pointer;
}
.box input[type= "submit"]:hover{
  background: #2ecc71;
}
</style>
