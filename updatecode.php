<?php
session_start();
require 'config/db.php';

if(isset($_POST['updatedata']))
{
    $id = $_POST['update_id'];
    $name = $_POST['name1'];
    $sdec = $_POST['sdec1'];
    $type = $_POST['type1'];
    $video = $_POST['video1'];

    $query = "UPDATE courses SET name='$name', sdec='$sdec', type='$type',video='$video' WHERE id='$id'  ";
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
if(isset($_POST['updatedatasub']))
{
    $id = $_POST['update_idsub'];
    $name = $_POST['namesub1'];
    $sdec = $_POST['sdecsub1'];
    $type = $_POST['typesub1'];
    $link = $_POST['linksub1'];

    $query = "UPDATE subject SET name='$name', descsub='$sdec', type='$type',link='$link' WHERE id='$id'  ";
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

if(isset($_POST['updatedataknow']))
{
    $id = $_POST['update_idknow'];
    $name = $_POST['nameknow1'];
    $sdec = $_POST['sdecknow1'];
    $type = $_POST['typeknow1'];
    $link = $_POST['linkknow1'];

    $query = "UPDATE knowledge SET name='$name', type='$type', sdec='$sdec',link='$link' WHERE id='$id'  ";
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
if(isset($_POST['updatedatacat']))
{
    $id = $_POST['update_idcat'];
   $namecat = $_POST['catnamee1'];
    $sdecat = $_POST['catdesce1'];
    $typecat = $_POST['cattypee1'];
    $query = "UPDATE category SET catname='$namecat', catdesc='$sdecat', cattype='$typecat' WHERE id='$id'  ";
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
if(isset($_POST['updatecon']))
{   $id = $_POST['update_idcon'];
    $name = $_POST['namecon11'];
    $host = $_POST['hostcon11'];
    $desc = $_POST['sdeccon11'];
    $dt = $_POST['datetimecon11'];
    $place = $_POST['placecon11'];
    $link = $_POST['linkcon11'];
    $type = $_POST['typecon11'];
    $medim = $_POST['mediumcon11'];
   
    $query = "UPDATE conference SET name='$name', host='$host', datetime='$dt', description='$desc',place='$place',type='$type',link='$link',mode='$medim' WHERE id='$id'  ";
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
if(isset($_POST['updateuser']))
{   $id = $_POST['update_iduser'];
    $usernameu=$_POST['usernameu'];
    $mobileu=$_POST['mobileu'];
    $emailu=$_POST['emailu'];
    $addu=$_POST['addu'];
    $amountu=$_POST['amountu'];
    $paidu=$_POST['paidu'];
    $delu=$_POST['delu'];
    $query = "UPDATE udata SET name='$usernameu', mobile='$mobileu', email='$emailu', addr='$addu',amount='$amountu',paid='$paidu',del='$delu' WHERE id='$id'  ";
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
