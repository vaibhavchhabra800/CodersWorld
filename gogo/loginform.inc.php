<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
        if(!empty($username)&&!empty($password))
            {

                echo $query="SELECT id FROM userlist WHERE username = '$username' AND password= '$password';";
                echo $query_run=mysql_query($query);
                if($query_run)
                {
                    $query_num_rows=mysql_num_rows($query_run);
                    if($query_num_rows==0)
                    {
                        echo 'invalid username';
                    }
                    else{
                        $user_id=mysql_result($query_run,0,'id');
                        $_SESSION['user_id']= $user_id;


                    }
                }
            }

        else{
           header("Location: ../in2dex.php");
        }

}
else {
    echo "STUCk";
    echo $_POST['username'];
    echo "STUCk";
}
?>
