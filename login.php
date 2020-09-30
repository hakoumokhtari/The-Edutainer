<?php 

    echo "<h1> Hello,  </h1>"
?>
<?php 
include "db_conn.php";
if (isset($_POST['username']) && isset($_POST['username'])){
    function validate($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
return $data;
}

$username= validate($_POST['username']);
$pass= validate($_POST['password']);
if(empty($username)){header("Location:index.php?error= User name is required ");
    exit();}
else if ((empty($password))){if(empty($username)){header("Location:index.php?error= password is required ");
    exit();}
else {$sql = "SELECT * FROM users WHERE user_name='$username'AND password='$pass'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($resuly)===1){$row=mysqli_fetch_assoc($result); print_r($row);
if ($row['username']===$uname && $row['password']===$pass){
    $_SESSION['username']=$row['user_name'];
    $_SESSION['name']=$row['name'];
    $_SESSION['id']= $row['id']; 
    header("Location:index.php"); 
}


}
else{
    header("Location:index.php?error= incorrect user name or password ");
    exit();

    header("Location:index.php");
    exit();
}

