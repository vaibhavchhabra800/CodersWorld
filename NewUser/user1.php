    <!DOCTYPE html>
    <head lang="en">
    <meta charset="UTF-8">

    <link rel="icon" href="../HelloWorldFavicon.jpg">
    <title>HELLO WORLD</title>

    <script src="../jquery.js"></script>



    <!-- JQQUEY EFFECTS FILE -->
    <script type="text/javascript" src="../jquery%20effects.js">

    </script>

    <link rel="stylesheet" type="text/css" href="../stylevcmainpage.css">
    <link rel="stylesheet" type="text/css" href="../newuserstyles.css">





</head>

<body id="body">
<?php
session_start();
ob_start();

if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
{
    $user_id=$_SESSION['user_id'];

    include('../gogo/connect.inc.php');
    $query2="select * from userlist where id='$user_id' ;";
    $queryresult=mysql_query( $query2, $conn );

if($queryresult) {
    while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC)) {
        $isactive = $row['is_active'];
    }
}
    if($isactive==0)
    {
        session_destroy();
        header('Location:../in2dex.php');
        exit();
    }

    if ($_SESSION['user_id'] == 3)
    {
    header("Location:../aman_sharma/aman.php");

} else {
//header("Location:../Users/user1.php");
}
}
else
{
    header('Location:../in2dex.php');
    exit();
}


?>



<div id="TopFixedPlace">

    <a href ="../in2dex.php">

        <img alt="Hello World Logo" id="HelloWorldLogo"   src="../hwlogo.jpg" >

    </a>



    <div id="mainlinks">
        <p>
            <?php

            echo "<a href='../gogo/logout.php' id='LOGINREGISTER'>Log Out</a>";

            ?>



    </div>
</div>


<br><br><br><br><br><br>






<div>
    <form action="upload.php" method="post" enctype="multipart/form-data" id="uploadmiddle">
    Select file to upload:<br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">

   </form>
</div>




<br>
<br><br><br><br>



<div class="myfilesadminfiles">MY FILES</div>
<br>
<br>


<?php

include('../gogo/connect.inc.php');

$user_id = $_SESSION['user_id'];

?>

<div id="uploadsdiv" >
<table id ="uploads">
    <tr id="tbchnggreem">
        <th class="th">File Name</th>
        <th class="th">Date</th>
        <th class="th">Delete It</th>
    </tr>






            <?php
            $query2="select * from userfiles where by_admin=0 and sent_by='$user_id' ;";
            $queryresult=mysql_query( $query2, $conn );

            if($queryresult) {
                while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC)) {
                    $file_name = $row['file_name'];
                    $date_added = $row['date_added'];

                    ?>




                    <tr class="tbhovchngcol">


                        <td class="td"><a href="allow_download.php?id=<?php echo $user_id ?>&filenamee=<?php echo $file_name ?>"> <?php echo $file_name ?></a></td>


                        <td class="td"><?php echo $date_added ?></td>
                        <td class="td"><a href="deleteafileuser.php?filetobedeletedaddr=../aman_sharma/recievedfiles/<?php echo $_SESSION['user_id'].'/'. $file_name ?>&filetobedeleted=<?php echo $file_name ?>"> <img id="closee" src="../teamfotos/Close-icon.png"><style>#closee{height:20px;width:20px;}</style></a></td>
                    </tr>


                <?php
                }
            }
            else
            {
                echo "cant get files";
            }
            ?>


</table>

</div>
<br>
<br>
<br>
<br>
<br>

<br>


<div class="myfilesadminfiles">Files By Admin</div>

<div id="uploadsdiv" >
    <table id =uploads>
        <tr id="tbchnggreem">
            <th class="th">File Name</th>
            <th class="th">Date</th>
        </tr>

        <?php
        include('../gogo/connect.inc.php');
        $query2="select * from userfiles where by_admin=1 and sent_toid='$user_id' ;";
        $queryresult=mysql_query( $query2, $conn );

        if($queryresult) {
            while ($row = mysql_fetch_array($queryresult, MYSQL_ASSOC)) {
                $file_name = $row['file_name'];
                $date_added = $row['date_added'];

                ?>

                <tr class="tbhovchngcol">

                    <td class="td"><a href="filesgivenbyadmindownload.php?id=<?php echo $user_id ;?>&filenamee=<?php echo $file_name; ?>"><?php echo $file_name; ?></a></td>
                    <td class="td"><?php echo $date_added; ?></td>
                </tr>


            <?php }
        }?>


    </table>

</div>

<br>
<br>
<br>
<br>
<br>
<br>



<div id="footer">
    <br>
    <p id="contactus">CONTACT US</p>

    <a id="end" href="https://www.facebook.com/programmerscore/?fref=ts">
        <img src="../facebook-logo-in-circular-button-outlined-social-symbol_318-70175.png" id="fblastlogo">

    </a>
    <br><br>

    <p id ="reportbug">Report a bug:<br><p id="jmail">jaintanisha01@gmail.com</p></p>
    <p id="copyright">
        © 2016 HELLO WORLD All Rights Reserved.

    </p>


</div>

<!--
<a href="./files/1.jpg">Click to download</a>
-->


</body>
</html>
