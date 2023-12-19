<!-- <?php
echo'<pre>';
print_r($_POST);
print_r($_files);
?> -->

<?php
    include("../config/config.php");
    include("header.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml='';
    $result = $conn->query("select * from catergory");

    if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){

            $id = $row['id'];
            $roleHtml .= '
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['detail'].'</td>
            <td><a href="catergory_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
    </tr>';
        }
    }
?>
<h2>catergory</h2>
<?php echo $message?>
<a href="catergory_manage.php">Add New catergory</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>detail</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        echo $roleHtml;?>
        <!-- <tr>
            <td>1</td>
            <td>Admin</td>
            <td>this is my class</td>
            <td><button>Edit</button>/<button>Delete</button></td>
    </tr> -->
    </tbody>
    </table>
<?php
include("footer.php");
?>