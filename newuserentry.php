<?php
if($_POST['password']==$_POST['confirm_password'])
{


    include('./gogo/connect.inc.php');

$fullname=$_POST['fullname'];
$user_name=$_POST['username'];
$fb_id=$_POST['fb_id'];
$password=$_POST['password'];
$password=md5($password);

    $query2="insert into userlist values (null,'$fullname','$user_name','$password','$fb_id',0);";
    $queryresult=mysql_query( $query2, $conn );

    if($queryresult) {
        echo "thnx for registering .Wait for admin to respond";
        mysql_close($conn);
    }
    else
    {
        echo "Error creating user";
        mysql_close($conn);

    }


}
else
{
    echo 'passwords r not same';
}
?>