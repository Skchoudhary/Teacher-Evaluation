<?php

$link=mysqli_connect("localhost","root","root","eval");

if($link==false)
 {
    die("ERROR:Could not connect".mysql_connect_error());
 }

 //one subject
session_start();
$sub0=$_SESSION['sub'][0];
$comm0= (int)$_POST["comm1"];
$syll0=(int)$_POST["syll1"];
$class0= (int)$_POST["class1"];
$dis0= (int)$_POST["discp1"];
$sec=mysqli_real_escape_string($link, $_POST['sec']);

$sql="insert into grades values('$sec','$comm0','$syll0','$dis0','$class0','$sub0')";
if(mysqli_query($link, $sql))
{}
else
echo"failuree";

//second subject
$sub1=$_SESSION['sub'][1];
$comm1= (int)$_POST["comm2"];
$syll1=(int)$_POST["syll2"];
$class1= (int)$_POST["class2"];
$dis1= (int)$_POST["discp2"];
$sec=$_POST["sec"];

$sql="insert into grades values('$sec','$comm1','$syll1','$dis1','$class1','$sub1')";
if(mysqli_query($link, $sql))
{}
else
echo"failuree";

//third subject
$sub2=$_SESSION['sub'][2];
$comm2= (int)$_POST["comm2"];
$syll2=(int)$_POST["syll2"];
$class2= (int)$_POST["class2"];
$dis2= (int)$_POST["discp2"];
$sec=$_POST["sec"];

$sql="insert into grades values('$sec','$comm2','$syll2','$dis2','$class2','$sub2')";
if(mysqli_query($link, $sql))
{}
else
echo"failuree";

//fourth subject
$sub3=$_SESSION['sub'][3];
$comm3= (int)$_POST["comm3"];
$syll3=(int)$_POST["syll3"];
$class3= (int)$_POST["class3"];
$dis3= (int)$_POST["discp3"];
$sec=$_POST["sec"];

$sql="insert into grades values('$sec','$comm3','$syll3','$dis3','$class3','$sub3')";
if(mysqli_query($link, $sql))
{}
else
echo"failuree";

//fifth subject
$sub4=$_SESSION['sub'][4];
$comm4= (int)$_POST["comm4"];
$syll4=(int)$_POST["syll4"];
$class4= (int)$_POST["class4"];
$dis4= (int)$_POST["discp4"];
$sec=$_POST["sec"];

$sql="insert into grades values('$sec','$comm4','$syll4','$dis4','$class4','$sub4')";
if(mysqli_query($link, $sql))
{}
else
echo"failuree";
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
<h1>Thank you</h1>
</body>
</html>




