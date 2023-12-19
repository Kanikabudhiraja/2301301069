<?php
include("../config/config.php");
include("header.php");
//update
$id='';
$title='';
$description='';
if(isset($_GET['id'])&& $_GET['id']>0)
{   
    $id=$_GET['id']; //$_get-->data ko collect krne k lie khan --> url l andher? k baad jo bhi aata h ussequery string
    $a= $conn-> query("select name,description from role where id=".$id); 
    echo $a->num_rows;
    if($a->num_rows>0)
    {   $c=$a->fetch_assoc(); // row k actual result 
        $title=$c['name'];
        $description=$c['description'];

    }


}

//add
// $title='';
// $description='';
// if(isset($_GET['id']) && $_GET['id']>0){
//     //edit
//     $result = $conn->query("select * from role where id=".$_GET['id']);// *-->jb hme sare table k subtitle lene ho
//     if($result->num_rows>0){
//         $row = $result->fetch_assoc();
//         $title=$row['name'];
//         $description=$row['description'];
//     }
// }
?>
<h2>Role Manage</h2>
<form method="post" action="callback/role.php" enctype="multipart/form-data">
<input type="text" name="title" value="<?php echo $title;?>"  required>
<textarea name="description"><?php echo $description?></textarea>
<input type="submit">
</form>
<?php
include("footer.php");
?>