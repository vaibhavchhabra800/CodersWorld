<?php
session_start();
$userid=$_SESSION['user_id'];;
$target_dir = "../aman_sharma/recievedfiles/".$userid.'/';
if (file_exists($target_dir)) {
    //do nothing
} else {
    //making dir
    $new = mkdir($target_dir  , 0777);
}



$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

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
             $query="INSERT into userfiles values (null,'$nameoffile','$dateofupload','$timeofupload',0,'$userid',-1);";
             mysql_query($query);
             echo $nameoffile."<br>".$dateofupload."<br>".$timeofupload;
             mysql_close($conn);


        //TILL HERE SQL SHIT
          //   header("Location: ./user1.php");
         }
    }
    else
    {
        echo "Sorry, there was an error uploading your file.";
        mysql_close($conn);
    }
}
?>
