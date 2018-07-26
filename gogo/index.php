<?php
    include ("./connect.inc.php");
    include("core.inc.php");

    if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
    {
        //session_destroy();
        //echo "Man i logged u outdone";
     //   $yesyes=gertuserfield('full_name');
        //header('Location:../NewUser/user1.php');
//Change moving to user1
       // header("Location:../Users/user1.php");
}
else{
    //this is the login form
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password=md5($password);
        if(!empty($username)&&!empty($password))
        {

             $query="SELECT id FROM userlist WHERE username = '$username' AND password= '$password';";
             $query_run=mysql_query($query);
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
                    header("Location: ../NewUser/user1.php");

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
    //header("Location: loginform.inc.php");

}

?>