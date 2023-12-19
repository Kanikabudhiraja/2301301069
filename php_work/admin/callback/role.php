<?php
include("../../config/config.php");

if(isset($_POST['title']) && trim($_POST['title']!=''))
{
    //insert
    //echo 'here';
        $title=$_POST['title'];
        $description= $_POST['description'];
        $query="INSERT INTO ROLE(name,description) VALUES('$title' ,'$description')";
        $checkResult=$conn->query($query);
        //echo'here';
        if($checkResult)
          {  $_SESSION['status']='success';
         header("location:..//role.php");
            //echo 'pass';
        }
        else
        {   $_SESSION['status']='fail';
            header("location:./role.php");
            //echo'fail';
        }
    }
//delete
//select
?>
