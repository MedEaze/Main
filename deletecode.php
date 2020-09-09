<?php
require 'config/db.php';
session_start();

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM courses WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['deletedataknow']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM knowledge WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['deletedatasub']))
{
    $id = $_POST['delete_idsub'];

    $query = "DELETE FROM subject WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}

if(isset($_POST['deletecat']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM resource WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['deletedatacat']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM category WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['deletedatauser']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM udata WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}
if(isset($_POST['deletedatacon']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM conference WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['edit'] = 'delete_success';
        header('Location: userdetails.php');
    }
    else
    {
        $_SESSION['edit'] = 'error';
        header('Location: userdetails.php');
    }
}


?>
