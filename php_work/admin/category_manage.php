<!-- <?php
include("header.php");
?>
<h2>Caterogy Manange </h2>

<form method="post" action="category.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="text" name="description">
<input type="Submit">
</form>
<?php
include("footer.php");
?> -->
<?php
    include("../config/config.php");
    include("header.php"); 
    print_r($_GET);

    $title='';
    $detail='';
    
      if(isset($_GET['id']) && $_GET['id']>0){
        //edit
    
        $result=$conn->query("select * from catergory where id=".$_GET['id']);
        //$checkResult ke sath kuch or bhi bhi likh sakte ho
         if($result->num_rows>0)//
         {
         $row=$result->fetch_assoc();
         print_r($row);
         $title=$row['name'];
         $detail=$row['detail'];
         }
        }
    if($conn->connect_error){
        echo'failed';
    }else{
        echo'pass';
    }
    // select
?>
<h2>catergory Manage</h2>
<form method="post" action="callback/catergory.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="text" name="detail">
<input type="submit">
</form>


<?php
    include("footer.php");
?>