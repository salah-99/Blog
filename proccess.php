<?php


$mysqli = mysqli_connect('localhost', 'root','');
mysqli_select_db($mysqli, 'blog');

$id = 0;

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    $mysqli->query("insert into posts (title, category, description, img) values ('$title', '$category', '$description', '$img')") or die($mysqli->error);

    $_SESSION['massage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "sucess";

    header("location:index.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("delete from posts where id=$id") or die($mysqli->error());

    $_SESSION['massage'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $rusult = $mysqli->query("select * from posts where id=$id") or die($mysqli->error());
        $bow = $rusult->fetch_array();
        $title = $bow['title'];
        $category = $bow['category'];
        $description = $bow['description'];
        $img = $bow['img'];
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    $mysqli->query("update posts set title='$title', category='$category', description='$description', img='$img' where id='$id'") or die($mysqli->error);

    header("location:index.php");

}


?>