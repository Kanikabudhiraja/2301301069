
<?php
include("../config/config.php");
include("header.php");

if($conn->connect_error)
{
    echo'failed';
}
else
{
    echo'pass';
}
?>
<h2>Role Manange </h2>
<form method="post" action="callback/role.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="text" name="description">
<input type="Submit">

</form>
<?php
include("footer.php");
?>