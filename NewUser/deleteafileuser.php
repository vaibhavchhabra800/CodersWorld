<?php
session_start();
ob_start();
$user_id=$_SESSION['user_id'];
$filetodeleteaddr = $_GET["filetobedeletedaddr"];
$filetodeletenamesql=$_GET['filetobedeleted'];
echo $filetodeleteaddr;
if(file_exists($filetodeleteaddr))
{
    echo "<br>yes exitsts man<br>";

    if (!unlink($filetodeleteaddr))
    {
        echo ("<br>Error deleting $filetodeleteaddr");

    }
    else
    {
        echo ("<br>Deleted $filetodeleteaddr");

        //SQL SHIT
        include('../gogo/connect.inc.php');
        echo "<br>id== $user_id ";
        echo "<br> file to delte== $filetodeletenamesql <br>";
        $query = "DELETE FROM userfiles where File_name='$filetodeletenamesql' and By_admin=0 and Sent_by='$user_id';";

        $retval = mysql_query( $query, $conn );

        if(! $retval ) {
            die('Could not delte file from database  ' . mysql_error());
        }
        else{
            echo  'file deleted from db';
        }


        mysql_close($conn);
    }
}
else
{
    echo "<br>I dont know not exists";
}
?>