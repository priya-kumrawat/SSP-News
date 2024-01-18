 <?php 
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo"Connection Successfully";
}
else{
    echo"no connection";
}
mysqli_select_db($con, "ssplogin");
$name=$_POST["name"];
$pass=$_POST["password"];

$q=" select * from userinfo where name='$name' && password='$pass'";
$result= mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1){
   $_SESSION['username']= $name;
   header('location:news.html');
} 
else
{
    header('location:news.html');
}
?> 