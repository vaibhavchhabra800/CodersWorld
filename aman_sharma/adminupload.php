<?php


//SQL SHIT CHECKING FOR USERNAMEin DB
include('../gogo/connect.inc.php');

$username2srch=$_POST['searchherevc'];


//shit
$query="SELECT id FROM userlist WHERE username = '$username2srch';";
$query_run=mysql_query($query);
$queryresult=mysql_query( $query, $conn );
$query_num_rows=mysql_num_rows($queryresult);
if($queryresult) {

    if ($query_num_rows == 0) {
        echo 'invalid username  file not uploaded';
        $uploadOk = 0;
    } else {
        while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC)) {
            $user_id = $row['id'];




        }
    }
}
else
{
    echo mysql_error($conn);

}


//sql ends here

$target_dir = "../Users/".$user_id.'/filesadmin/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br><br>";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 4000000) {
    echo "You file should be less than 4 MB in Size.<br><br>";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
        if($uploadOk == 1) {
            //executing sql statements vaibhav
//Connecting to sql
            include('../gogo/connect.inc.php');
            //I need 2 set the timezone 1st
            date_default_timezone_set("Asia/Kolkata");


            //time zone complete

            $nameoffile=basename($_FILES["fileToUpload"]["name"]);
             $dateofupload=date("d-m-Y");
            $timeofupload=date("h:i:sa");
            $query3="INSERT into userfiles values (null,'$nameoffile','$dateofupload','$timeofupload',1,-1,'$user_id');";
            $query_run=mysql_query($query3);



            echo $nameoffile."<br>".$dateofupload."<br>".$timeofupload;
            echo "<br>file uploaded to :". $user_id;

            //TILL HERE SQL SHIT
            //   header("Location: ./user1.php");
        }
    }
    else {
        echo "Sorry, there was an error uploading your file.";

    }
}
?>
