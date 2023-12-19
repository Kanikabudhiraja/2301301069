<?php
include("../config/config.php");
include("header.php");
$message='';
if(isset($_SESSION['status']) && $_SESSION['status']!='')
{
    $message='<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
?>

<h2>Book </h2>
<a href="blog_manage.php"> Add New Book </a>
<table border="1">
<thead>
        <tr>
            <th> Sr.Number</th>
            <th> Title </th>
            <th> Description</th>
            <th> Action</th>

</tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Admin</td>
        <td>df=snsh@12 </td>
        <td><button> Edit </button> Delete </button> </td>
</tr>
</tbody>
</table>
<?php
include("footer.php");
?>