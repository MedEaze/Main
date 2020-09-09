<?php
require 'config/db.php';
session_start();

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    $sdec = $_POST['sdec'];
    $type = $_POST['type'];
    $category = $_POST['category1'];
   
    $video_id = $_POST['video'];
    $dummy="https://www.youtube.com/embed/".$video_id;
    $type = $_POST['type'];
    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $folder = "documents/".$filename;

    move_uploaded_file($tempname, $folder);
    
  
    $query = "INSERT INTO courses (`catid`,`name`,`sdec`,`type`,`video`,`file`) VALUES ('$category','$name','$sdec','$type','$dummy','$folder')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['insertdataknow']))
{
    $nameknow = $_POST['nameknow'];
    $sdecknow = $_POST['sdecknow'];
    $typeknow = $_POST['typeknow'];
    $linkknow = $_POST['linkknow'];
   
    
   
    $filename1= $_FILES["uploadimg"]["name"];
    $tempname1= $_FILES["uploadimg"]["tmp_name"];
    $folder1 = "documents/".$filename1;

    move_uploaded_file($tempname1, $folder1);
    
  
    $query = "INSERT INTO knowledge (`name`,`type`,`sdec`,`link`,`img`) VALUES ('$nameknow','$typeknow','$sdecknow','$linkknow','$folder1')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['insertdatasub']))
{
    $namesub = $_POST['namesub'];
    $sdecsub = $_POST['sdecsub'];
    $typesub = $_POST['typesub'];
    $linksub = $_POST['linksub'];
  
   
    
   
  
  
    $query = "INSERT INTO subject (`name`,`descsub`,`type`,`link`) VALUES ('$namesub','$sdecsub','$typesub','$linksub')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['insertdatacat']))
{
    $namecat = $_POST['namecat'];
    $sdecat = $_POST['sdeccat'];
    $typecat = $_POST['typecat'];
   
  
    $query = "INSERT INTO category (`catname`,`catdesc`,`cattype`) VALUES ('$namecat','$sdecat','$typecat')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['insertcon']))
{
    $name = $_POST['namecon'];
    $host = $_POST['hostcon'];
    $desc = $_POST['sdeccon'];
    $dt = $_POST['datetimecon'];
    $place = $_POST['placecon'];
    $link = $_POST['linkcon'];
    $type = $_POST['typecon'];
    $mode = $_POST['mediumcon'];

    $query = "INSERT INTO conference (`name`,`host`,`datetime`,`description`,`place`,`type`,`link`,`mode`) VALUES ('$name','$host','$dt','$desc','$place','$type','$link','$mode')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['insertref']))
{
    $referenceid = $_POST['referenceid'];
    $referencecount = $_POST['referencecount'];
    
   

    $query = "INSERT INTO reference (`reference_id`,`count`) VALUES ('$referenceid','$referencecount')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}

?>