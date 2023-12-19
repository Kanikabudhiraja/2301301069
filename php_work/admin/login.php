<?php
include("header.php");
/*if(isset($_POST['username']) && $_POST['username']!='')
{
echo '<pre>';
print_r($_GET);
print_r($_GET['username']);
print_r($_GET['password']);
}*/
if(isset($_POST['password']) && $_POST['password']!='')
{
    echo '<pre>';
print_r($_POST['username']);
echo '<br>';
print_r('password ' . $_POST['password']);
}
?>
<h2>Login</h2>
<form method="post" action="category.php" enctype="multipart/form-data">
<input type="text" name='username'>
<input type="password" name='password'>
<input type="Submit">
<input type="file" name="profileimage">
</form>
<?php
include("footer.php");
?>