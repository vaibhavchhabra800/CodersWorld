<?php
$file = $_GET["filetobedeleted"];
echo $file;
$filetobedeletedname=$_GET['filetobedeletedname'];
$sent_by=$_GET['sent_by'];
if(file_exists($file))
{
    echo "yes exitsts man<br>";
    if (!unlink($file))
    {
        echo ("<br>Error deleting $file");
    }
    else
    {
        echo ("<br>Deleted $file");
        //SQL SHIT
        include('../gogo/connect.inc.php');
        echo "<br>sentbyid== $sent_by ";
        echo "<br> file to deltename== $filetobedeletedname <br>";
        $query = "DELETE FROM userfiles where file_name='$filetobedeletedname' and by_admin=0 and sent_by='$sent_by';";

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